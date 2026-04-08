# Coqui Toolkit: Cloudflare

Comprehensive Cloudflare management toolkit for [Coqui](https://github.com/carmelosantana/coqui). Provides full API v4 access for DNS records, tunnels, zones, security (firewall/WAF), page rules, and analytics.

## Requirements

- PHP 8.4+
- Coqui Bot with `carmelosantana/php-agents` ^0.7

## Installation

```bash
composer require coquibot/coqui-toolkit-cloudflare
```

The toolkit is auto-discovered by Coqui via `extra.php-agents.toolkits` in `composer.json`.

## Configuration

### Required Credentials

| Credential | Description |
|-----------|-------------|
| `CLOUDFLARE_API_TOKEN` | API token with appropriate permissions. Create one at [Cloudflare Dashboard](https://dash.cloudflare.com/profile/api-tokens). |

### Optional Credentials

| Credential | Description |
|-----------|-------------|
| `CLOUDFLARE_ACCOUNT_ID` | Account ID for tunnel and account-scoped operations. Found on the dashboard overview page. |

Set credentials via the Coqui `credentials` tool:

```
credentials(action: "set", key: "CLOUDFLARE_API_TOKEN", value: "your-token")
credentials(action: "set", key: "CLOUDFLARE_ACCOUNT_ID", value: "your-account-id")
```

### API Token Permissions

Create a custom API token at [Cloudflare API Tokens](https://dash.cloudflare.com/profile/api-tokens) with the permissions you need:

| Permission | Required For |
|-----------|-------------|
| Zone: Read | `cf_zone` list/get, `cf_analytics` |
| Zone: Edit | `cf_zone` create/delete/purge |
| DNS: Read | `cf_dns` list/get/export |
| DNS: Edit | `cf_dns` create/update/delete/import |
| Cloudflare Tunnel: Read | `cf_tunnel` list/get |
| Cloudflare Tunnel: Edit | `cf_tunnel` create/delete, `cf_tunnel_config` |
| Firewall Services: Read | `cf_firewall` list, `cf_waf` list |
| Firewall Services: Edit | `cf_firewall` create/update/delete, `cf_waf` update |
| Zone: Page Rules: Read | `cf_page_rule` list/get |
| Zone: Page Rules: Edit | `cf_page_rule` create/update/delete |
| Analytics: Read | `cf_analytics` |
| Account Settings: Read | `cf_account` |

## Tools

### `cf_account`

List accounts or get details for a specific account.

**Actions:** `list`, `get`

### `cf_zone`

Manage zones — list, get details, create, delete, or purge cache.

**Actions:** `list`, `get`, `create`, `delete`, `purge_cache`

### `cf_dns`

Full CRUD for DNS records (A, AAAA, CNAME, MX, TXT, NS, SRV, CAA, and more), plus BIND export/import.

**Actions:** `list`, `get`, `create`, `update`, `delete`, `export`, `import`

### `cf_tunnel`

Manage Cloudflare Tunnels. Requires `CLOUDFLARE_ACCOUNT_ID`.

**Actions:** `list`, `create`, `get`, `delete`, `connections`

### `cf_tunnel_config`

Get and update tunnel configurations — ingress rules and origin settings. Supports both full JSON config and single-rule updates with automatic merge.

**Actions:** `get`, `update`

### `cf_firewall`

Manage firewall access rules — block/challenge IPs, IP ranges, ASNs, or countries.

**Actions:** `list_rules`, `create_rule`, `update_rule`, `delete_rule`

### `cf_waf`

List and manage WAF managed rule packages and individual rule overrides.

**Actions:** `list_packages`, `get_package`, `list_rules`, `get_rule`, `update`

### `cf_page_rule`

Create, list, update, and delete Page Rules for URL pattern matching with actions.

**Actions:** `list`, `get`, `create`, `update`, `delete`

### `cf_analytics`

Retrieve zone analytics — dashboard totals (traffic, bandwidth, threats) and DNS query analytics.

**Actions:** `dashboard`, `dns`

## Gated Operations

The following operations require user confirmation (or `--auto-approve`):

| Tool | Gated Actions |
|------|---------------|
| `cf_zone` | `delete`, `purge_cache` |
| `cf_dns` | `delete`, `import` |
| `cf_tunnel` | `delete` |
| `cf_tunnel_config` | `update` |
| `cf_firewall` | `create_rule`, `update_rule`, `delete_rule` |
| `cf_waf` | `update` |
| `cf_page_rule` | `create`, `update`, `delete` |

## Usage Examples

```
# List all zones
cf_zone(action: "list")

# Find DNS records for a zone
cf_dns(action: "list", zone_id: "abc123")

# Create an A record
cf_dns(action: "create", zone_id: "abc123", type: "A", name: "app.example.com", content: "192.0.2.1", proxied: true)

# Create a tunnel
cf_tunnel(action: "create", name: "my-tunnel")

# Configure tunnel ingress
cf_tunnel_config(action: "update", tunnel_id: "def456", hostname: "app.example.com", service: "http://localhost:8080")

# Get zone analytics for the last 7 days
cf_analytics(action: "dashboard", zone_id: "abc123", since: "-10080")
```

## Development

```bash
# Install dependencies
composer install

# Run tests
composer test

# Static analysis
composer analyse
```

## License

MIT
