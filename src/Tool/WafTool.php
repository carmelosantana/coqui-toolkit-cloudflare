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
 * List and manage WAF (Web Application Firewall) managed rule packages.
 */
final readonly class WafTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_waf',
            description: 'Manage WAF (Web Application Firewall) — list managed rule packages, view rules in a package, and update rule sensitivity/action.',
            parameters: [
                new EnumParameter(
                    'action',
                    'WAF operation to perform.',
                    values: ['list_packages', 'get_package', 'list_rules', 'get_rule', 'update'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'package_id',
                    'WAF package ID (required for get_package, list_rules, get_rule, update).',
                    required: false,
                ),
                new StringParameter(
                    'rule_id',
                    'WAF rule ID (required for get_rule, update).',
                    required: false,
                ),
                new EnumParameter(
                    'rule_mode',
                    'Rule mode for update action.',
                    values: ['default', 'disable', 'simulate', 'block', 'challenge'],
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
            return ToolResult::error('The "zone_id" parameter is required for all WAF operations.');
        }

        return match ($action) {
            'list_packages' => $this->listPackages($zoneId),
            'get_package' => $this->getPackage($zoneId, $args),
            'list_rules' => $this->listRules($zoneId, $args),
            'get_rule' => $this->getRule($zoneId, $args),
            'update' => $this->updateRule($zoneId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    private function listPackages(string $zoneId): ToolResult
    {
        return $this->client->paginate("zones/{$zoneId}/firewall/waf/packages")
            ->toToolResultWith('WAF managed rule packages:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getPackage(string $zoneId, array $args): ToolResult
    {
        $packageId = trim((string) ($args['package_id'] ?? ''));
        if ($packageId === '') {
            return ToolResult::error('The "package_id" parameter is required to get a WAF package.');
        }

        return $this->client->get("zones/{$zoneId}/firewall/waf/packages/{$packageId}")
            ->toToolResultWith('WAF package details:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function listRules(string $zoneId, array $args): ToolResult
    {
        $packageId = trim((string) ($args['package_id'] ?? ''));
        if ($packageId === '') {
            return ToolResult::error('The "package_id" parameter is required to list rules in a WAF package.');
        }

        return $this->client->paginate("zones/{$zoneId}/firewall/waf/packages/{$packageId}/rules")
            ->toToolResultWith('WAF rules:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getRule(string $zoneId, array $args): ToolResult
    {
        $packageId = trim((string) ($args['package_id'] ?? ''));
        $ruleId = trim((string) ($args['rule_id'] ?? ''));

        if ($packageId === '' || $ruleId === '') {
            return ToolResult::error('Both "package_id" and "rule_id" are required to get a WAF rule.');
        }

        return $this->client->get("zones/{$zoneId}/firewall/waf/packages/{$packageId}/rules/{$ruleId}")
            ->toToolResultWith('WAF rule details:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateRule(string $zoneId, array $args): ToolResult
    {
        $packageId = trim((string) ($args['package_id'] ?? ''));
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        $ruleMode = trim((string) ($args['rule_mode'] ?? ''));

        if ($packageId === '' || $ruleId === '') {
            return ToolResult::error('Both "package_id" and "rule_id" are required to update a WAF rule.');
        }

        if ($ruleMode === '') {
            return ToolResult::error('The "rule_mode" parameter is required to update a WAF rule.');
        }

        return $this->client->patch("zones/{$zoneId}/firewall/waf/packages/{$packageId}/rules/{$ruleId}", [
            'mode' => $ruleMode,
        ])->toToolResultWith("WAF rule updated (mode: {$ruleMode}):");
    }
}
