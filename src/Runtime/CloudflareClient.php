<?php

declare(strict_types=1);

namespace CoquiBot\Toolkits\Cloudflare\Runtime;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Low-level HTTP client for the Cloudflare REST API v4.
 *
 * Handles authentication, request dispatch, response parsing,
 * and automatic pagination. All tool classes delegate to this client.
 */
final class CloudflareClient
{
    private const string BASE_URL = 'https://api.cloudflare.com/client/v4';
    private const int TIMEOUT = 30;
    private const int MAX_PER_PAGE = 50;

    private string $resolvedToken = '';
    private string $resolvedAccountId = '';

    public function __construct(
        private readonly string $apiToken = '',
        private readonly string $accountId = '',
        private readonly HttpClientInterface $httpClient = new \Symfony\Component\HttpClient\CurlHttpClient(),
    ) {}

    /**
     * Create a client from environment variables.
     */
    public static function fromEnv(): self
    {
        return new self(
            apiToken: self::envString('CLOUDFLARE_API_TOKEN'),
            accountId: self::envString('CLOUDFLARE_ACCOUNT_ID'),
        );
    }

    // -- HTTP verbs ----------------------------------------------------------

    /**
     * @param array<string, mixed> $query
     */
    public function get(string $endpoint, array $query = []): CloudflareResult
    {
        return $this->request('GET', $endpoint, query: $query);
    }

    /**
     * @param array<string, mixed> $body
     */
    public function post(string $endpoint, array $body = []): CloudflareResult
    {
        return $this->request('POST', $endpoint, body: $body);
    }

    /**
     * @param array<string, mixed> $body
     */
    public function put(string $endpoint, array $body = []): CloudflareResult
    {
        return $this->request('PUT', $endpoint, body: $body);
    }

    /**
     * @param array<string, mixed> $body
     */
    public function patch(string $endpoint, array $body = []): CloudflareResult
    {
        return $this->request('PATCH', $endpoint, body: $body);
    }

    public function delete(string $endpoint): CloudflareResult
    {
        return $this->request('DELETE', $endpoint);
    }

    // -- Pagination ----------------------------------------------------------

    /**
     * Fetch all pages of a paginated endpoint and merge results.
     *
     * @param array<string, mixed> $query
     * @param int $maxPages Safety cap to prevent runaway pagination
     * @return CloudflareResult Combined result with merged data array
     */
    public function paginate(string $endpoint, array $query = [], int $maxPages = 10): CloudflareResult
    {
        $allData = [];
        $page = 1;
        $query['per_page'] = self::MAX_PER_PAGE;

        for ($i = 0; $i < $maxPages; $i++) {
            $query['page'] = $page;
            $result = $this->get($endpoint, $query);

            if (!$result->success) {
                return $result;
            }

            $data = $result->data;
            if (is_array($data)) {
                $allData = array_merge($allData, $data);
            }

            $totalPages = $result->resultInfo['total_pages'] ?? 1;
            if ($page >= $totalPages) {
                break;
            }

            $page++;
        }

        return new CloudflareResult(
            success: true,
            data: $allData,
            errors: [],
            messages: [],
            resultInfo: ['total_count' => count($allData)],
            statusCode: 200,
        );
    }

    // -- Account ID ----------------------------------------------------------

    /**
     * Resolve the account ID, returning an error result if missing.
     */
    public function requireAccountId(): string|CloudflareResult
    {
        $id = $this->resolveAccountId();

        if ($id === '') {
            return CloudflareResult::error(
                'CLOUDFLARE_ACCOUNT_ID is required for this operation. '
                . 'Set it via the credentials tool: credentials(action: "set", key: "CLOUDFLARE_ACCOUNT_ID", value: "your-account-id")',
            );
        }

        return $id;
    }

    // -- Internal ------------------------------------------------------------

    /**
     * @param array<string, mixed> $query
     * @param array<string, mixed> $body
     */
    private function request(
        string $method,
        string $endpoint,
        array $query = [],
        array $body = [],
    ): CloudflareResult {
        $token = $this->resolveApiToken();
        if ($token === '') {
            return CloudflareResult::error(
                'CLOUDFLARE_API_TOKEN is not configured. '
                . 'Set it via the credentials tool: credentials(action: "set", key: "CLOUDFLARE_API_TOKEN", value: "your-token")',
            );
        }

        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json',
            ],
            'timeout' => self::TIMEOUT,
        ];

        if ($query !== []) {
            $options['query'] = $this->filterQuery($query);
        }

        if ($body !== [] && in_array($method, ['POST', 'PUT', 'PATCH'], true)) {
            $options['json'] = $body;
        }

        $url = self::BASE_URL . '/' . ltrim($endpoint, '/');

        try {
            $response = $this->httpClient->request($method, $url, $options);
            $statusCode = $response->getStatusCode();
            $json = $response->toArray(false);

            return new CloudflareResult(
                success: (bool) ($json['success'] ?? false),
                data: $json['result'] ?? null,
                errors: $json['errors'] ?? [],
                messages: $json['messages'] ?? [],
                resultInfo: $json['result_info'] ?? [],
                statusCode: $statusCode,
            );
        } catch (HttpExceptionInterface $e) {
            $statusCode = $e->getResponse()->getStatusCode();
            try {
                $json = $e->getResponse()->toArray(false);
                $errors = $json['errors'] ?? [['message' => $e->getMessage()]];
            } catch (\Throwable) {
                $errors = [['message' => $e->getMessage()]];
            }

            return new CloudflareResult(
                success: false,
                data: null,
                errors: $errors,
                messages: [],
                resultInfo: [],
                statusCode: $statusCode,
            );
        } catch (TransportExceptionInterface $e) {
            return CloudflareResult::error('Transport error: ' . $e->getMessage());
        }
    }

    /**
     * Remove null/empty-string values from query parameters.
     *
     * @param array<string, mixed> $query
     * @return array<string, mixed>
     */
    private function filterQuery(array $query): array
    {
        return array_filter($query, static fn(mixed $v): bool => $v !== null && $v !== '');
    }

    private function resolveApiToken(): string
    {
        if ($this->resolvedToken !== '') {
            return $this->resolvedToken;
        }

        if ($this->apiToken !== '') {
            $this->resolvedToken = $this->apiToken;
            return $this->resolvedToken;
        }

        $env = getenv('CLOUDFLARE_API_TOKEN');
        $this->resolvedToken = is_string($env) && $env !== '' ? $env : '';

        return $this->resolvedToken;
    }

    private function resolveAccountId(): string
    {
        if ($this->resolvedAccountId !== '') {
            return $this->resolvedAccountId;
        }

        if ($this->accountId !== '') {
            $this->resolvedAccountId = $this->accountId;
            return $this->resolvedAccountId;
        }

        $env = getenv('CLOUDFLARE_ACCOUNT_ID');
        $this->resolvedAccountId = is_string($env) && $env !== '' ? $env : '';

        return $this->resolvedAccountId;
    }

    private static function envString(string $name): string
    {
        $value = getenv($name);
        return is_string($value) && $value !== '' ? $value : '';
    }
}
