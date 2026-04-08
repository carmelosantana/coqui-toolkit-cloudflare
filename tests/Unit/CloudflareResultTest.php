<?php

declare(strict_types=1);

use CarmeloSantana\PHPAgents\Enum\ToolResultStatus;
use CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareResult;

test('successful result reports success', function () {
    $result = new CloudflareResult(
        success: true,
        data: ['id' => 'abc123'],
        statusCode: 200,
    );

    expect($result->success)->toBeTrue();
    expect($result->statusCode)->toBe(200);
});

test('failed result reports failure', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [['message' => 'Invalid token', 'code' => 9109]],
        statusCode: 403,
    );

    expect($result->success)->toBeFalse();
    expect($result->statusCode)->toBe(403);
});

test('errorMessage formats single error', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [['message' => 'Zone not found', 'code' => 1049]],
        statusCode: 404,
    );

    expect($result->errorMessage())->toBe('Zone not found (code 1049)');
});

test('errorMessage formats multiple errors', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [
            ['message' => 'Error one'],
            ['message' => 'Error two', 'code' => 42],
        ],
        statusCode: 400,
    );

    expect($result->errorMessage())->toBe('Error one; Error two (code 42)');
});

test('errorMessage returns unknown error when no errors', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [],
        statusCode: 500,
    );

    expect($result->errorMessage())->toContain('Unknown error');
    expect($result->errorMessage())->toContain('500');
});

test('toToolResult returns success for successful result', function () {
    $result = new CloudflareResult(
        success: true,
        data: ['name' => 'example.com'],
        statusCode: 200,
    );

    $toolResult = $result->toToolResult();

    expect($toolResult->status)->toBe(ToolResultStatus::Success);
    expect($toolResult->content)->toContain('example.com');
});

test('toToolResult returns error for failed result', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [['message' => 'Forbidden']],
        statusCode: 403,
    );

    $toolResult = $result->toToolResult();

    expect($toolResult->status)->toBe(ToolResultStatus::Error);
    expect($toolResult->content)->toContain('Forbidden');
});

test('toToolResult handles null data as empty string', function () {
    $result = new CloudflareResult(
        success: true,
        data: null,
        statusCode: 200,
    );

    $toolResult = $result->toToolResult();

    expect($toolResult->status)->toBe(ToolResultStatus::Success);
    expect($toolResult->content)->toBe('');
});

test('toToolResult handles string data directly', function () {
    $result = new CloudflareResult(
        success: true,
        data: 'BIND zone file content here',
        statusCode: 200,
    );

    $toolResult = $result->toToolResult();

    expect($toolResult->status)->toBe(ToolResultStatus::Success);
    expect($toolResult->content)->toBe('BIND zone file content here');
});

test('toToolResultWith prepends success prefix', function () {
    $result = new CloudflareResult(
        success: true,
        data: ['id' => 'abc'],
        statusCode: 200,
    );

    $toolResult = $result->toToolResultWith('Record created:');

    expect($toolResult->status)->toBe(ToolResultStatus::Success);
    expect($toolResult->content)->toStartWith('Record created:');
    expect($toolResult->content)->toContain('abc');
});

test('toToolResultWith returns error message on failure', function () {
    $result = new CloudflareResult(
        success: false,
        data: null,
        errors: [['message' => 'Bad request']],
        statusCode: 400,
    );

    $toolResult = $result->toToolResultWith('Should not appear:');

    expect($toolResult->status)->toBe(ToolResultStatus::Error);
    expect($toolResult->content)->not->toContain('Should not appear');
    expect($toolResult->content)->toContain('Bad request');
});

test('error factory creates failed result', function () {
    $result = CloudflareResult::error('Custom error message', 500);

    expect($result->success)->toBeFalse();
    expect($result->statusCode)->toBe(500);
    expect($result->data)->toBeNull();
    expect($result->errorMessage())->toBe('Custom error message');
});

test('result info is preserved', function () {
    $result = new CloudflareResult(
        success: true,
        data: [['id' => '1'], ['id' => '2']],
        resultInfo: ['total_count' => 2, 'total_pages' => 1, 'page' => 1],
        statusCode: 200,
    );

    expect($result->resultInfo)->toHaveKey('total_count', 2);
    expect($result->resultInfo)->toHaveKey('total_pages', 1);
});
