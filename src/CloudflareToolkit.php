<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare;

use CarmeloSantana\PHPAgents\Contract\ToolkitInterface;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient;
use CoquiBot\Toolkits\Cloudflare\Tool\AccountTool;
use CoquiBot\Toolkits\Cloudflare\Tool\AnalyticsTool;
use CoquiBot\Toolkits\Cloudflare\Tool\DnsRecordTool;
use CoquiBot\Toolkits\Cloudflare\Tool\FirewallTool;
use CoquiBot\Toolkits\Cloudflare\Tool\PageRuleTool;
use CoquiBot\Toolkits\Cloudflare\Tool\TunnelConfigTool;
use CoquiBot\Toolkits\Cloudflare\Tool\TunnelTool;
use CoquiBot\Toolkits\Cloudflare\Tool\WafTool;
use CoquiBot\Toolkits\Cloudflare\Tool\ZoneTool;

/**
 * Cloudflare management toolkit for Coqui.
 *
 * Provides comprehensive Cloudflare API v4 access: DNS records, tunnels,
 * zones, firewall rules, WAF, page rules, and analytics.
 */
final class CloudflareToolkit implements ToolkitInterface
{
    private readonly CloudflareClient $client;

    public function __construct(
        ?CloudflareClient $client = null,
    ) {
        $this->client = $client ?? CloudflareClient::fromEnv();
    }

    /**
     * @return array<\CarmeloSantana\PHPAgents\Contract\ToolInterface>
     */
    public function tools(): array
    {
        return [
            (new AccountTool($this->client))->build(),
            (new ZoneTool($this->client))->build(),
            (new DnsRecordTool($this->client))->build(),
            (new TunnelTool($this->client))->build(),
            (new TunnelConfigTool($this->client))->build(),
            (new FirewallTool($this->client))->build(),
            (new WafTool($this->client))->build(),
            (new PageRuleTool($this->client))->build(),
            (new AnalyticsTool($this->client))->build(),
        ];
    }

    public function guidelines(): string
    {
        return <<<'GUIDELINES'
        <CLOUDFLARE-GUIDELINES>
        ## Cloudflare Toolkit

        You have full access to the Cloudflare API v4 through the following tools:

        ### Tool Overview
        - **cf_account** — List accounts, get account details
        - **cf_zone** — List/get/create/delete zones, purge cache
        - **cf_dns** — Full CRUD for DNS records (A, AAAA, CNAME, MX, TXT, NS, SRV, CAA, etc.), plus import/export
        - **cf_tunnel** — Create, list, get, delete Cloudflare Tunnels (requires CLOUDFLARE_ACCOUNT_ID)
        - **cf_tunnel_config** — Get and update tunnel configurations (ingress rules, origin settings)
        - **cf_firewall** — Manage firewall rules (access rules) at the zone level
        - **cf_waf** — List and update WAF managed rule packages and rule overrides
        - **cf_page_rule** — Create, list, update, and delete Page Rules
        - **cf_analytics** — Retrieve zone analytics (dashboard and DNS)

        ### Workflow Patterns

        **DNS Management:**
        1. Use `cf_zone(action: "list")` to find the zone ID for a domain
        2. Use `cf_dns(action: "list", zone_id: "...")` to see existing records
        3. Use `cf_dns(action: "create", ...)` to add records

        **Tunnel Setup:**
        1. Ensure CLOUDFLARE_ACCOUNT_ID is set
        2. Use `cf_tunnel(action: "create", name: "my-tunnel")` to create a tunnel
        3. Use `cf_tunnel_config(action: "update", tunnel_id: "...", ...)` to configure ingress rules

        **Security:**
        1. Use `cf_firewall(action: "list_rules", zone_id: "...")` to review rules
        2. Use `cf_waf(action: "list_packages", zone_id: "...")` for WAF managed rulesets

        ### Important Notes
        - Zone IDs are required for most operations — always look up the zone first
        - Tunnel and account-scoped operations require CLOUDFLARE_ACCOUNT_ID
        - DNS record types must be uppercase (A, AAAA, CNAME, MX, TXT, etc.)
        - Proxied records (orange cloud) route through Cloudflare; dns_only records bypass it
        - The `cf_zone(action: "purge_cache")` operation purges ALL cached content — use carefully
        - Destructive operations (delete, purge) require user confirmation
        </CLOUDFLARE-GUIDELINES>
        GUIDELINES;
    }
}
