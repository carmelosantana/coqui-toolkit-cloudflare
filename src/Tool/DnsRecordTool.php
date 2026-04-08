<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Tool;

use CarmeloSantana\PHPAgents\Contract\ToolInterface;
use CarmeloSantana\PHPAgents\Tool\Tool;
use CarmeloSantana\PHPAgents\Tool\ToolResult;
use CarmeloSantana\PHPAgents\Tool\Parameter\BoolParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\EnumParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\NumberParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\StringParameter;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient;

/**
 * Full CRUD for Cloudflare DNS records, plus import/export.
 */
final readonly class DnsRecordTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_dns',
            description: 'Manage DNS records — list, get, create, update, delete, export, and import records for a zone.',
            parameters: [
                new EnumParameter(
                    'action',
                    'DNS operation to perform.',
                    values: ['list', 'get', 'create', 'update', 'delete', 'export', 'import'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'record_id',
                    'DNS record ID (required for get, update, delete).',
                    required: false,
                ),
                new EnumParameter(
                    'type',
                    'DNS record type (required for create, optional filter for list).',
                    values: ['A', 'AAAA', 'CNAME', 'MX', 'TXT', 'NS', 'SRV', 'CAA', 'PTR', 'LOC', 'SPF', 'CERT', 'DNSKEY', 'DS', 'NAPTR', 'SMIMEA', 'SSHFP', 'TLSA', 'URI'],
                    required: false,
                ),
                new StringParameter(
                    'name',
                    'DNS record name, e.g. "example.com" or "sub.example.com" (required for create, optional filter for list).',
                    required: false,
                ),
                new StringParameter(
                    'content',
                    'Record content — IP address, hostname, text value, etc. (required for create and update).',
                    required: false,
                ),
                new NumberParameter(
                    'ttl',
                    'Time to live in seconds. Use 1 for automatic. Default: 1 (auto).',
                    required: false,
                ),
                new BoolParameter(
                    'proxied',
                    'Whether the record is proxied through Cloudflare (orange cloud). Only for A, AAAA, CNAME records.',
                    required: false,
                ),
                new NumberParameter(
                    'priority',
                    'Record priority (required for MX, SRV, URI records).',
                    required: false,
                ),
                new StringParameter(
                    'comment',
                    'Optional comment for the DNS record.',
                    required: false,
                ),
                new StringParameter(
                    'bind_content',
                    'BIND zone file content for import action.',
                    required: false,
                ),
            ],
            callback: fn(array $args) => $this->execute($args),
        );
    }

    /**
     * @param array<string, mixed> $args
     */
    private function execute(array $args): ToolResult
    {
        $action = trim((string) ($args['action'] ?? ''));
        $zoneId = trim((string) ($args['zone_id'] ?? ''));

        if ($zoneId === '') {
            return ToolResult::error('The "zone_id" parameter is required for all DNS operations.');
        }

        return match ($action) {
            'list' => $this->listRecords($zoneId, $args),
            'get' => $this->getRecord($zoneId, $args),
            'create' => $this->createRecord($zoneId, $args),
            'update' => $this->updateRecord($zoneId, $args),
            'delete' => $this->deleteRecord($zoneId, $args),
            'export' => $this->exportRecords($zoneId),
            'import' => $this->importRecords($zoneId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    /**
     * @param array<string, mixed> $args
     */
    private function listRecords(string $zoneId, array $args): ToolResult
    {
        $query = [];

        $type = trim((string) ($args['type'] ?? ''));
        if ($type !== '') {
            $query['type'] = strtoupper($type);
        }

        $name = trim((string) ($args['name'] ?? ''));
        if ($name !== '') {
            $query['name'] = $name;
        }

        return $this->client->paginate("zones/{$zoneId}/dns_records", $query)
            ->toToolResultWith('DNS records:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getRecord(string $zoneId, array $args): ToolResult
    {
        $recordId = trim((string) ($args['record_id'] ?? ''));
        if ($recordId === '') {
            return ToolResult::error('The "record_id" parameter is required to get a DNS record.');
        }

        return $this->client->get("zones/{$zoneId}/dns_records/{$recordId}")
            ->toToolResultWith('DNS record:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function createRecord(string $zoneId, array $args): ToolResult
    {
        $type = trim((string) ($args['type'] ?? ''));
        $name = trim((string) ($args['name'] ?? ''));
        $content = trim((string) ($args['content'] ?? ''));

        if ($type === '' || $name === '' || $content === '') {
            return ToolResult::error('The "type", "name", and "content" parameters are required to create a DNS record.');
        }

        $body = [
            'type' => strtoupper($type),
            'name' => $name,
            'content' => $content,
            'ttl' => (int) ($args['ttl'] ?? 1),
        ];

        if (isset($args['proxied']) && in_array(strtoupper($type), ['A', 'AAAA', 'CNAME'], true)) {
            $body['proxied'] = (bool) $args['proxied'];
        }

        if (isset($args['priority'])) {
            $body['priority'] = (int) $args['priority'];
        }

        if (isset($args['comment']) && trim((string) $args['comment']) !== '') {
            $body['comment'] = trim((string) $args['comment']);
        }

        return $this->client->post("zones/{$zoneId}/dns_records", $body)
            ->toToolResultWith("DNS record created ({$type} {$name}):");
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateRecord(string $zoneId, array $args): ToolResult
    {
        $recordId = trim((string) ($args['record_id'] ?? ''));
        if ($recordId === '') {
            return ToolResult::error('The "record_id" parameter is required to update a DNS record.');
        }

        $body = [];

        $type = trim((string) ($args['type'] ?? ''));
        if ($type !== '') {
            $body['type'] = strtoupper($type);
        }

        $name = trim((string) ($args['name'] ?? ''));
        if ($name !== '') {
            $body['name'] = $name;
        }

        $content = trim((string) ($args['content'] ?? ''));
        if ($content !== '') {
            $body['content'] = $content;
        }

        if (isset($args['ttl'])) {
            $body['ttl'] = (int) $args['ttl'];
        }

        if (isset($args['proxied'])) {
            $body['proxied'] = (bool) $args['proxied'];
        }

        if (isset($args['priority'])) {
            $body['priority'] = (int) $args['priority'];
        }

        if (isset($args['comment'])) {
            $body['comment'] = trim((string) $args['comment']);
        }

        if ($body === []) {
            return ToolResult::error('At least one field must be provided to update a DNS record.');
        }

        return $this->client->patch("zones/{$zoneId}/dns_records/{$recordId}", $body)
            ->toToolResultWith('DNS record updated:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function deleteRecord(string $zoneId, array $args): ToolResult
    {
        $recordId = trim((string) ($args['record_id'] ?? ''));
        if ($recordId === '') {
            return ToolResult::error('The "record_id" parameter is required to delete a DNS record.');
        }

        return $this->client->delete("zones/{$zoneId}/dns_records/{$recordId}")
            ->toToolResultWith('DNS record deleted.');
    }

    private function exportRecords(string $zoneId): ToolResult
    {
        return $this->client->get("zones/{$zoneId}/dns_records/export")
            ->toToolResultWith('DNS records exported (BIND format):');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function importRecords(string $zoneId, array $args): ToolResult
    {
        $bindContent = trim((string) ($args['bind_content'] ?? ''));
        if ($bindContent === '') {
            return ToolResult::error('The "bind_content" parameter is required to import DNS records. Provide BIND zone file content.');
        }

        return $this->client->post("zones/{$zoneId}/dns_records/import", [
            'file' => $bindContent,
        ])->toToolResultWith('DNS records imported:');
    }
}
