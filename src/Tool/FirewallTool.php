<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Tool;

use CarmeloSantana\PHPAgents\Contract\ToolInterface;
use CarmeloSantana\PHPAgents\Tool\Tool;
use CarmeloSantana\PHPAgents\Tool\ToolResult;
use CarmeloSantana\PHPAgents\Tool\Parameter\EnumParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\StringParameter;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient;

/**
 * Manage Cloudflare firewall access rules at the zone level.
 */
final readonly class FirewallTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_firewall',
            description: 'Manage Cloudflare firewall access rules — list, create, update, or delete IP/country/ASN access rules for a zone.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Firewall operation to perform.',
                    values: ['list_rules', 'create_rule', 'update_rule', 'delete_rule'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'rule_id',
                    'Access rule ID (required for update_rule, delete_rule).',
                    required: false,
                ),
                new EnumParameter(
                    'mode',
                    'Rule action mode (required for create_rule, update_rule).',
                    values: ['block', 'challenge', 'js_challenge', 'managed_challenge', 'whitelist'],
                    required: false,
                ),
                new EnumParameter(
                    'target',
                    'Rule target type (required for create_rule).',
                    values: ['ip', 'ip6', 'ip_range', 'asn', 'country'],
                    required: false,
                ),
                new StringParameter(
                    'value',
                    'Target value — IP address, CIDR range, ASN number (e.g. "AS13335"), or country code (e.g. "US"). Required for create_rule.',
                    required: false,
                ),
                new StringParameter(
                    'notes',
                    'Optional notes/description for the rule.',
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
            return ToolResult::error('The "zone_id" parameter is required for all firewall operations.');
        }

        return match ($action) {
            'list_rules' => $this->listRules($zoneId),
            'create_rule' => $this->createRule($zoneId, $args),
            'update_rule' => $this->updateRule($zoneId, $args),
            'delete_rule' => $this->deleteRule($zoneId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    private function listRules(string $zoneId): ToolResult
    {
        return $this->client->paginate("zones/{$zoneId}/firewall/access_rules/rules")
            ->toToolResultWith('Firewall access rules:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function createRule(string $zoneId, array $args): ToolResult
    {
        $mode = trim((string) ($args['mode'] ?? ''));
        $target = trim((string) ($args['target'] ?? ''));
        $value = trim((string) ($args['value'] ?? ''));

        if ($mode === '' || $target === '' || $value === '') {
            return ToolResult::error('The "mode", "target", and "value" parameters are required to create a firewall rule.');
        }

        $body = [
            'mode' => $mode,
            'configuration' => [
                'target' => $target,
                'value' => $value,
            ],
        ];

        $notes = trim((string) ($args['notes'] ?? ''));
        if ($notes !== '') {
            $body['notes'] = $notes;
        }

        return $this->client->post("zones/{$zoneId}/firewall/access_rules/rules", $body)
            ->toToolResultWith("Firewall rule created ({$mode} {$target}={$value}):");
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateRule(string $zoneId, array $args): ToolResult
    {
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        if ($ruleId === '') {
            return ToolResult::error('The "rule_id" parameter is required to update a firewall rule.');
        }

        $body = [];

        $mode = trim((string) ($args['mode'] ?? ''));
        if ($mode !== '') {
            $body['mode'] = $mode;
        }

        $notes = trim((string) ($args['notes'] ?? ''));
        if ($notes !== '') {
            $body['notes'] = $notes;
        }

        if ($body === []) {
            return ToolResult::error('At least "mode" or "notes" must be provided to update a firewall rule.');
        }

        return $this->client->patch("zones/{$zoneId}/firewall/access_rules/rules/{$ruleId}", $body)
            ->toToolResultWith('Firewall rule updated:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function deleteRule(string $zoneId, array $args): ToolResult
    {
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        if ($ruleId === '') {
            return ToolResult::error('The "rule_id" parameter is required to delete a firewall rule.');
        }

        return $this->client->delete("zones/{$zoneId}/firewall/access_rules/rules/{$ruleId}")
            ->toToolResultWith('Firewall rule deleted.');
    }
}
