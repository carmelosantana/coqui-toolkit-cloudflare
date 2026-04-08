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
 * Retrieve Cloudflare zone analytics — dashboard and DNS analytics.
 */
final readonly class AnalyticsTool
{
    public function __construct(
        private CloudflareClient $client,
    ) {}

    public function build(): ToolInterface
    {
        return new Tool(
            name: 'cf_analytics',
            description: 'Retrieve Cloudflare analytics — zone dashboard totals and DNS analytics. Provides traffic, bandwidth, threat, and DNS query metrics.',
            parameters: [
                new EnumParameter(
                    'action',
                    'Analytics query to perform.',
                    values: ['dashboard', 'dns'],
                    required: true,
                ),
                new StringParameter(
                    'zone_id',
                    'Zone ID (required for all actions).',
                    required: true,
                ),
                new StringParameter(
                    'since',
                    'Start date/time in ISO 8601 format (e.g. "2024-01-01T00:00:00Z") or relative like "-1440" (minutes ago). Default: -10080 (7 days).',
                    required: false,
                ),
                new StringParameter(
                    'until',
                    'End date/time in ISO 8601 format or relative minutes. Default: 0 (now).',
                    required: false,
                ),
                new StringParameter(
                    'dimensions',
                    'Comma-separated DNS analytics dimensions (queryName, queryType, responseCode, coloName). Only for dns action.',
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
            return ToolResult::error('The "zone_id" parameter is required for all analytics operations.');
        }

        return match ($action) {
            'dashboard' => $this->dashboard($zoneId, $args),
            'dns' => $this->dns($zoneId, $args),
            default => ToolResult::error("Unknown action: {$action}"),
        };
    }

    /**
     * @param array<string, mixed> $args
     */
    private function dashboard(string $zoneId, array $args): ToolResult
    {
        $query = $this->buildTimeQuery($args);

        return $this->client->get("zones/{$zoneId}/analytics/dashboard", $query)
            ->toToolResultWith('Zone analytics dashboard:');
    }

    /**
     * @param array<string, mixed> $args
     */
    private function dns(string $zoneId, array $args): ToolResult
    {
        $query = $this->buildTimeQuery($args);

        $dimensions = trim((string) ($args['dimensions'] ?? ''));
        if ($dimensions !== '') {
            $query['dimensions'] = $dimensions;
        }

        return $this->client->get("zones/{$zoneId}/dns_analytics/report", $query)
            ->toToolResultWith('DNS analytics:');
    }

    /**
     * Build time range query parameters.
     *
     * @param array<string, mixed> $args
     * @return array<string, string>
     */
    private function buildTimeQuery(array $args): array
    {
        $query = [];

        $since = trim((string) ($args['since'] ?? ''));
        if ($since !== '') {
            $query['since'] = $since;
        }

        $until = trim((string) ($args['until'] ?? ''));
        if ($until !== '') {
            $query['until'] = $until;
        }

        return $query;
    }
}
