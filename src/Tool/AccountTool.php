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
 * List and inspect Cloudflare accounts.
 */
final readonly class AccountTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_account',
            description: 'List Cloudflare accounts or get details for a specific account.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Operation to perform.',
                    values: ['list', 'get'],
                    required: true,
                ),
                new StringParameter(
                    'account_id',
                    'Account ID (required for "get" action).',
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
            'list' => $this->listAccounts(),
            'get' => $this->getAccount($args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    private function listAccounts(): ToolResult
    {
        return $this->client->paginate('accounts')
            ->toToolResultWith('Cloudflare accounts:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function getAccount(array $args): ToolResult
    {
        $accountId = trim((string) ($args['account_id'] ?? ''));
        if ($accountId === '') {
            $resolved = $this->client->requireAccountId();
            if ($resolved instanceof \CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareResult) {
                return $resolved->toToolResult();
            }
            $accountId = $resolved;
        }

        return $this->client->get("accounts/{$accountId}")
            ->toToolResultWith("Account details:");
    }
}
