<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Tool;

use CarmeloSantana\PHPAgents\Contract\ToolInterface;
use CarmeloSantana\PHPAgents\Tool\Tool;
use CarmeloSantana\PHPAgents\Tool\ToolResult;
use CarmeloSantana\PHPAgents\Tool\Parameter\EnumParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\StringParameter;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareResult;

/**
 * Manage Cloudflare zones — list, get, create, delete, and purge cache.
 */
final readonly class ZoneTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_zone',
            description: 'Manage Cloudflare zones — list, get details, create, delete, or purge cache.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Zone operation to perform.',
                    values: ['list', 'get', 'create', 'delete', 'purge_cache'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for get, delete, purge_cache).',
                    required: false,
                ),
                new StringParameter(
                    'name',
                    'Domain name (required for create, optional filter for list).',
                    required: false,
                ),
                new StringParameter(
                    'status',
                    'Filter zones by status (active, pending, initializing, moved, deleted, deactivated).',
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

        return match ($action) {
            'list' => $this->listZones($args),
            'get' => $this->getZone($args),
            'create' => $this->createZone($args),
            'delete' => $this->deleteZone($args),
            'purge_cache' => $this->purgeCache($args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    /**
     * @param array<string, mixed> $args
     */
    private function listZones(array $args): ToolResult
    {
        $query = [];

        $name = trim((string) ($args['name'] ?? ''));
        if ($name !== '') {
            $query['name'] = $name;
        }

        $status = trim((string) ($args['status'] ?? ''));
        if ($status !== '') {
            $query['status'] = $status;
        }

        return $this->client->paginate('zones', $query)
            ->toToolResultWith('Zones:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getZone(array $args): ToolResult
    {
        $zoneId = trim((string) ($args['zone_id'] ?? ''));
        if ($zoneId === '') {
            return ToolResult::error('The "zone_id" parameter is required to get zone details.');
        }

        return $this->client->get("zones/{$zoneId}")
            ->toToolResultWith('Zone details:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function createZone(array $args): ToolResult
    {
        $name = trim((string) ($args['name'] ?? ''));
        if ($name === '') {
            return ToolResult::error('The "name" parameter is required to create a zone.');
        }

        $accountId = $this->client->requireAccountId();
        if ($accountId instanceof CloudflareResult) {
            return $accountId->toToolResult();
        }

        return $this->client->post('zones', [
            'name' => $name,
            'account' => ['id' => $accountId],
            'type' => 'full',
        ])->toToolResultWith("Zone created for {$name}:");
    }

    /**
     * @param array<string, mixed> $args
     */
    private function deleteZone(array $args): ToolResult
    {
        $zoneId = trim((string) ($args['zone_id'] ?? ''));
        if ($zoneId === '') {
            return ToolResult::error('The "zone_id" parameter is required to delete a zone.');
        }

        return $this->client->delete("zones/{$zoneId}")
            ->toToolResultWith('Zone deleted.');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function purgeCache(array $args): ToolResult
    {
        $zoneId = trim((string) ($args['zone_id'] ?? ''));
        if ($zoneId === '') {
            return ToolResult::error('The "zone_id" parameter is required to purge cache.');
        }

        return $this->client->post("zones/{$zoneId}/purge_cache", [
            'purge_everything' => true,
        ])->toToolResultWith('Cache purged for zone.');
    }
}
