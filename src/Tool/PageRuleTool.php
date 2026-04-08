<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Tool;

use CarmeloSantana\PHPAgents\Contract\ToolInterface;
use CarmeloSantana\PHPAgents\Tool\Tool;
use CarmeloSantana\PHPAgents\Tool\ToolResult;
use CarmeloSantana\PHPAgents\Tool\Parameter\EnumParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\NumberParameter;
use CarmeloSantana\PHPAgents\Tool\Parameter\StringParameter;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient;

/**
 * Create, list, update, and delete Cloudflare Page Rules.
 */
final readonly class PageRuleTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_page_rule',
            description: 'Manage Cloudflare Page Rules — list, get, create, update, or delete page rules for a zone.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Page Rule operation to perform.',
                    values: ['list', 'get', 'create', 'update', 'delete'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'rule_id',
                    'Page Rule ID (required for get, update, delete).',
                    required: false,
                ),
                new StringParameter(
                    'url_pattern',
                    'URL match pattern, e.g. "*example.com/images/*" (required for create, optional for update).',
                    required: false,
                ),
                new StringParameter(
                    'actions_json',
                    'Page rule actions as a JSON array string, e.g. [{"id":"forwarding_url","value":{"url":"https://example.com","status_code":301}}]. Required for create.',
                    required: false,
                ),
                new EnumParameter(
                    'status',
                    'Rule status (active or disabled). Optional for create/update.',
                    values: ['active', 'disabled'],
                    required: false,
                ),
                new NumberParameter(
                    'priority',
                    'Rule priority (1 = highest). Rules are evaluated in order of priority.',
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
            return ToolResult::error('The "zone_id" parameter is required for all page rule operations.');
        }

        return match ($action) {
            'list' => $this->listRules($zoneId),
            'get' => $this->getRule($zoneId, $args),
            'create' => $this->createRule($zoneId, $args),
            'update' => $this->updateRule($zoneId, $args),
            'delete' => $this->deleteRule($zoneId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    private function listRules(string $zoneId): ToolResult
    {
        return $this->client->paginate("zones/{$zoneId}/pagerules")
            ->toToolResultWith('Page Rules:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getRule(string $zoneId, array $args): ToolResult
    {
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        if ($ruleId === '') {
            return ToolResult::error('The "rule_id" parameter is required to get a page rule.');
        }

        return $this->client->get("zones/{$zoneId}/pagerules/{$ruleId}")
            ->toToolResultWith('Page Rule details:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function createRule(string $zoneId, array $args): ToolResult
    {
        $urlPattern = trim((string) ($args['url_pattern'] ?? ''));
        $actionsJson = trim((string) ($args['actions_json'] ?? ''));

        if ($urlPattern === '' || $actionsJson === '') {
            return ToolResult::error('The "url_pattern" and "actions_json" parameters are required to create a page rule.');
        }

        /** @var array<int, array<string, mixed>>|null $actions */
        $actions = json_decode($actionsJson, true);
        if (!is_array($actions)) {
            return ToolResult::error('The "actions_json" parameter must be a valid JSON array.');
        }

        $body = [
            'targets' => [
                [
                    'target' => 'url',
                    'constraint' => [
                        'operator' => 'matches',
                        'value' => $urlPattern,
                    ],
                ],
            ],
            'actions' => $actions,
            'status' => trim((string) ($args['status'] ?? 'active')),
        ];

        if (isset($args['priority'])) {
            $body['priority'] = (int) $args['priority'];
        }

        return $this->client->post("zones/{$zoneId}/pagerules", $body)
            ->toToolResultWith("Page Rule created for \"{$urlPattern}\":");
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateRule(string $zoneId, array $args): ToolResult
    {
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        if ($ruleId === '') {
            return ToolResult::error('The "rule_id" parameter is required to update a page rule.');
        }

        $body = [];

        $urlPattern = trim((string) ($args['url_pattern'] ?? ''));
        if ($urlPattern !== '') {
            $body['targets'] = [
                [
                    'target' => 'url',
                    'constraint' => [
                        'operator' => 'matches',
                        'value' => $urlPattern,
                    ],
                ],
            ];
        }

        $actionsJson = trim((string) ($args['actions_json'] ?? ''));
        if ($actionsJson !== '') {
            /** @var array<int, array<string, mixed>>|null $actions */
            $actions = json_decode($actionsJson, true);
            if (!is_array($actions)) {
                return ToolResult::error('The "actions_json" parameter must be a valid JSON array.');
            }
            $body['actions'] = $actions;
        }

        $status = trim((string) ($args['status'] ?? ''));
        if ($status !== '') {
            $body['status'] = $status;
        }

        if (isset($args['priority'])) {
            $body['priority'] = (int) $args['priority'];
        }

        if ($body === []) {
            return ToolResult::error('At least one field must be provided to update a page rule.');
        }

        return $this->client->patch("zones/{$zoneId}/pagerules/{$ruleId}", $body)
            ->toToolResultWith('Page Rule updated:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function deleteRule(string $zoneId, array $args): ToolResult
    {
        $ruleId = trim((string) ($args['rule_id'] ?? ''));
        if ($ruleId === '') {
            return ToolResult::error('The "rule_id" parameter is required to delete a page rule.');
        }

        return $this->client->delete("zones/{$zoneId}/pagerules/{$ruleId}")
            ->toToolResultWith('Page Rule deleted.');
    }
}
