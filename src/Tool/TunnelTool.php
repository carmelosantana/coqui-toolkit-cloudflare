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
 * Manage Cloudflare Tunnels — list, create, get, and delete.
 */
final readonly class TunnelTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_tunnel',
            description: 'Manage Cloudflare Tunnels — list, create, get details, or delete tunnels. Requires CLOUDFLARE_ACCOUNT_ID.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Tunnel operation to perform.',
                    values: ['list', 'create', 'get', 'delete', 'connections'],
                    required: true,
                ),
                new StringParameter(
                    'tunnel_id',
                    'Tunnel ID (required for get, delete, connections).',
                    required: false,
                ),
                new StringParameter(
                    'name',
                    'Tunnel name (required for create, optional filter for list).',
                    required: false,
                ),
                new StringParameter(
                    'status',
                    'Filter tunnels by status (active, inactive, degraded) when listing.',
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

        $accountId = $this->client->requireAccountId();
        if ($accountId instanceof CloudflareResult) {
            return $accountId->toToolResult();
        }

        return match ($action) {
            'list' => $this->listTunnels($accountId, $args),
            'create' => $this->createTunnel($accountId, $args),
            'get' => $this->getTunnel($accountId, $args),
            'delete' => $this->deleteTunnel($accountId, $args),
            'connections' => $this->getConnections($accountId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    /**
     * @param array<string, mixed> $args
     */
    private function listTunnels(string $accountId, array $args): ToolResult
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

        return $this->client->paginate("accounts/{$accountId}/cfd_tunnel", $query)
            ->toToolResultWith('Cloudflare Tunnels:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function createTunnel(string $accountId, array $args): ToolResult
    {
        $name = trim((string) ($args['name'] ?? ''));
        if ($name === '') {
            return ToolResult::error('The "name" parameter is required to create a tunnel.');
        }

        return $this->client->post("accounts/{$accountId}/cfd_tunnel", [
            'name' => $name,
            'config_src' => 'cloudflare',
        ])->toToolResultWith("Tunnel \"{$name}\" created:");
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getTunnel(string $accountId, array $args): ToolResult
    {
        $tunnelId = trim((string) ($args['tunnel_id'] ?? ''));
        if ($tunnelId === '') {
            return ToolResult::error('The "tunnel_id" parameter is required to get tunnel details.');
        }

        return $this->client->get("accounts/{$accountId}/cfd_tunnel/{$tunnelId}")
            ->toToolResultWith('Tunnel details:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function deleteTunnel(string $accountId, array $args): ToolResult
    {
        $tunnelId = trim((string) ($args['tunnel_id'] ?? ''));
        if ($tunnelId === '') {
            return ToolResult::error('The "tunnel_id" parameter is required to delete a tunnel.');
        }

        return $this->client->delete("accounts/{$accountId}/cfd_tunnel/{$tunnelId}")
            ->toToolResultWith('Tunnel deleted.');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getConnections(string $accountId, array $args): ToolResult
    {
        $tunnelId = trim((string) ($args['tunnel_id'] ?? ''));
        if ($tunnelId === '') {
            return ToolResult::error('The "tunnel_id" parameter is required to get tunnel connections.');
        }

        return $this->client->get("accounts/{$accountId}/cfd_tunnel/{$tunnelId}/connections")
            ->toToolResultWith('Tunnel connections:');
    }
}
