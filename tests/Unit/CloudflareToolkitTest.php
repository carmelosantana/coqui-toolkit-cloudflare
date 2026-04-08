<?php

declare(strict_types=1);

use CarmeloSantana\PHPAgents\Contract\ToolInterface;
use CarmeloSantana\PHPAgents\Contract\ToolkitInterface;
use CoquiBot\Toolkits\Cloudflare\CloudflareToolkit;

test('toolkit implements ToolkitInterface', function () {
    $toolkit = new CloudflareToolkit();

    expect($toolkit)->toBeInstanceOf(ToolkitInterface::class);
});

test('tools returns all 9 tools', function () {
    $toolkit = new CloudflareToolkit();

    expect($toolkit->tools())->toHaveCount(9);
});

test('each tool implements ToolInterface', function () {
    $toolkit = new CloudflareToolkit();

    foreach ($toolkit->tools() as $tool) {
        expect($tool)->toBeInstanceOf(ToolInterface::class);
    }
});

test('tool names are unique', function () {
    $toolkit = new CloudflareToolkit();
    $names = array_map(fn(ToolInterface $t) => $t->name(), $toolkit->tools());

    expect($names)->toHaveCount(count(array_unique($names)));
});

test('all tool names start with cf_', function () {
    $toolkit = new CloudflareToolkit();

    foreach ($toolkit->tools() as $tool) {
        expect($tool->name())->toStartWith('cf_');
    }
});

test('expected tool names are registered', function () {
    $toolkit = new CloudflareToolkit();
    $names = array_map(fn(ToolInterface $t) => $t->name(), $toolkit->tools());

    expect($names)->toContain('cf_account');
    expect($names)->toContain('cf_zone');
    expect($names)->toContain('cf_dns');
    expect($names)->toContain('cf_tunnel');
    expect($names)->toContain('cf_tunnel_config');
    expect($names)->toContain('cf_firewall');
    expect($names)->toContain('cf_waf');
    expect($names)->toContain('cf_page_rule');
    expect($names)->toContain('cf_analytics');
});

test('each tool produces a valid function schema', function () {
    $toolkit = new CloudflareToolkit();

    foreach ($toolkit->tools() as $tool) {
        $schema = $tool->toFunctionSchema();

        expect($schema)
            ->toBeArray()
            ->toHaveKeys(['type', 'function']);

        expect($schema['type'])->toBe('function');
        expect($schema['function'])->toBeArray()->toHaveKeys(['name', 'description', 'parameters']);
        expect($schema['function']['name'])->toBeString()->not->toBeEmpty();
        expect($schema['function']['description'])->toBeString()->not->toBeEmpty();
        expect($schema['function']['parameters'])->toBeArray();
    }
});

test('guidelines contain XML tags', function () {
    $toolkit = new CloudflareToolkit();
    $guidelines = $toolkit->guidelines();

    expect($guidelines)->toContain('<CLOUDFLARE-GUIDELINES>');
    expect($guidelines)->toContain('</CLOUDFLARE-GUIDELINES>');
});

test('guidelines mention all tool names', function () {
    $toolkit = new CloudflareToolkit();
    $guidelines = $toolkit->guidelines();

    expect($guidelines)->toContain('cf_account');
    expect($guidelines)->toContain('cf_zone');
    expect($guidelines)->toContain('cf_dns');
    expect($guidelines)->toContain('cf_tunnel');
    expect($guidelines)->toContain('cf_tunnel_config');
    expect($guidelines)->toContain('cf_firewall');
    expect($guidelines)->toContain('cf_waf');
    expect($guidelines)->toContain('cf_page_rule');
    expect($guidelines)->toContain('cf_analytics');
});
