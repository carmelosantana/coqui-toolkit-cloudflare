<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Runtime;

use CarmeloSantana\PHPAgents\Tool\ToolResult;

/**
 * Typed result value object for Cloudflare API responses.
 *
 * Wraps the standard Cloudflare JSON envelope (success, errors, result,
 * result_info) and provides helpers for converting to ToolResult.
 */
final readonly class CloudflareResult
{
    /**
     * @param array<int, array<string, mixed>> $errors
     * @param array<int, array<string, mixed>> $messages
     * @param array<string, mixed> $resultInfo
     */
    public function __construct(
        public bool $success,
        public mixed $data,
        public array $errors = [],
        public array $messages = [],
        public array $resultInfo = [],
        public int $statusCode = 200,
    ) {}

    /**
     * Create an error result without making an API call.
     */
    public static function error(string $message, int $statusCode = 0): self
    {
        return new self(
            success: false,
            data: null,
            errors: [['message' => $message]],
            statusCode: $statusCode,
        );
    }

    /**
     * Extract a human-readable error string from the errors array.
     */
    public function errorMessage(): string
    {
        if ($this->errors === []) {
            return 'Unknown error (HTTP ' . $this->statusCode . ')';
        }

        $parts = [];
        foreach ($this->errors as $err) {
            $msg = (string) ($err['message'] ?? 'Unknown error');
            $code = isset($err['code']) ? " (code {$err['code']})" : '';
            $parts[] = $msg . $code;
        }

        return implode('; ', $parts);
    }

    /**
     * Convert the result to a ToolResult for the agent.
     *
     * On success, formats the data as pretty-printed JSON.
     * On failure, returns a structured error message.
     */
    public function toToolResult(): ToolResult
    {
        if ($this->success) {
            return ToolResult::success($this->formatData());
        }

        return ToolResult::error($this->errorMessage());
    }

    /**
     * Convert the result to a ToolResult with a custom success message.
     */
    public function toToolResultWith(string $successPrefix): ToolResult
    {
        if ($this->success) {
            $formatted = $this->formatData();
            $output = $successPrefix;
            if ($formatted !== '' && $formatted !== '""' && $formatted !== 'null') {
                $output .= "\n\n" . $formatted;
            }
            return ToolResult::success($output);
        }

        return ToolResult::error($this->errorMessage());
    }

    /**
     * Format the data payload as JSON for display.
     */
    private function formatData(): string
    {
        if ($this->data === null) {
            return '';
        }

        if (is_string($this->data)) {
            return $this->data;
        }

        $json = json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

        return $json !== false ? $json : '';
    }
}
