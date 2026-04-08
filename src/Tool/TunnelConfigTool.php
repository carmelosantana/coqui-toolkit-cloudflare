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
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareResult;

/**
 * Get and update Cloudflare Tunnel configurations (ingress rules, origin settings).
 */
final readonly class TunnelConfigTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_tunnel_config',
            description: 'Get or update Cloudflare Tunnel configurations — manage ingress rules and origin settings. Requires CLOUDFLARE_ACCOUNT_ID.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Configuration operation to perform.',
                    values: ['get', 'update'],
                    required: true,
                ),
                new StringParameter(
                    'tunnel_id',
                    'Tunnel ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'hostname',
                    'Public hostname for the ingress rule (e.g. "app.example.com"). Used when updating.',
                    required: false,
                ),
                new StringParameter(
                    'service',
                    'Origin service URL (e.g. "http://localhost:8080", "ssh://localhost:22"). Used when updating.',
                    required: false,
                ),
                new StringParameter(
                    'path',
                    'Optional path matcher for the ingress rule (e.g. "/api/*"). Used when updating.',
                    required: false,
                ),
                new StringParameter(
                    'ingress_json',
                    'Full ingress rules as a JSON array string. Overrides hostname/service when provided. Must include a catch-all rule as the last entry with service "http_status:404".',
                    required: false,
                ),
                new NumberParameter(
                    'connect_timeout',
                    'Origin connection timeout in seconds (default: 30).',
                    required: false,
                ),
                new NumberParameter(
                    'keep_alive_timeout',
                    'Origin keep-alive timeout in seconds (default: 90).',
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
        $tunnelId = trim((string) ($args['tunnel_id'] ?? ''));

        if ($tunnelId === '') {
            return ToolResult::error('The "tunnel_id" parameter is required for all tunnel config operations.');
        }

        $accountId = $this->client->requireAccountId();
        if ($accountId instanceof CloudflareResult) {
            return $accountId->toToolResult();
        }

        return match ($action) {
            'get' => $this->getConfig($accountId, $tunnelId),
            'update' => $this->updateConfig($accountId, $tunnelId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    private function getConfig(string $accountId, string $tunnelId): ToolResult
    {
        return $this->client->get("accounts/{$accountId}/cfd_tunnel/{$tunnelId}/configurations")
            ->toToolResultWith('Tunnel configuration:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateConfig(string $accountId, string $tunnelId, array $args): ToolResult
    {
        $ingressJson = trim((string) ($args['ingress_json'] ?? ''));

        if ($ingressJson !== '') {
            return $this->updateWithFullIngress($accountId, $tunnelId, $ingressJson);
        }

        return $this->updateWithSingleRule($accountId, $tunnelId, $args);
    }

    private function updateWithFullIngress(string $accountId, string $tunnelId, string $ingressJson): ToolResult
    {
        /** @var array<int, array<string, mixed>>|null $ingress */
        $ingress = json_decode($ingressJson, true);
        if (!is_array($ingress)) {
            return ToolResult::error('The "ingress_json" parameter must be a valid JSON array of ingress rules.');
        }

        return $this->client->put("accounts/{$accountId}/cfd_tunnel/{$tunnelId}/configurations", [
            'config' => ['ingress' => $ingress],
        ])->toToolResultWith('Tunnel configuration updated:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function updateWithSingleRule(string $accountId, string $tunnelId, array $args): ToolResult
    {
        $hostname = trim((string) ($args['hostname'] ?? ''));
        $service = trim((string) ($args['service'] ?? ''));

        if ($hostname === '' || $service === '') {
            return ToolResult::error(
                'Either provide "ingress_json" for full config, or "hostname" + "service" to add/update a single ingress rule.',
            );
        }

        // Fetch existing config to merge
        $existing = $this->client->get("accounts/{$accountId}/cfd_tunnel/{$tunnelId}/configurations");
        if (!$existing->success) {
            return $existing->toToolResult();
        }

        $config = is_array($existing->data) ? ($existing->data['config'] ?? []) : [];
        /** @var array<int, array<string, mixed>> $ingress */
        $ingress = $config['ingress'] ?? [];

        // Build the new rule
        $newRule = [
            'hostname' => $hostname,
            'service' => $service,
        ];

        $path = trim((string) ($args['path'] ?? ''));
        if ($path !== '') {
            $newRule['path'] = $path;
        }

        $originRequest = [];
        if (isset($args['connect_timeout'])) {
            $originRequest['connectTimeout'] = (int) $args['connect_timeout'];
        }
        if (isset($args['keep_alive_timeout'])) {
            $originRequest['keepAliveTimeout'] = (int) $args['keep_alive_timeout'];
        }
        if ($originRequest !== []) {
            $newRule['originRequest'] = $originRequest;
        }

        // Replace existing rule with same hostname or insert before catch-all
        $updated = false;
        foreach ($ingress as $i => $rule) {
            if (($rule['hostname'] ?? '') === $hostname) {
                $ingress[$i] = $newRule;
                $updated = true;
                break;
            }
        }

        if (!$updated) {
            // Insert before the last entry (catch-all) or append if no rules exist
            $catchAll = ['service' => 'http_status:404'];
            if ($ingress !== []) {
                $last = array_pop($ingress);
                $ingress[] = $newRule;
                $ingress[] = !isset($last['hostname']) ? $last : $catchAll;
            } else {
                $ingress[] = $newRule;
                $ingress[] = $catchAll;
            }
        }

        return $this->client->put("accounts/{$accountId}/cfd_tunnel/{$tunnelId}/configurations", [
            'config' => ['ingress' => array_values($ingress)],
        ])->toToolResultWith("Tunnel configuration updated (hostname: {$hostname}):");
    }
}
