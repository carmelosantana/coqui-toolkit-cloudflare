<?php declare(strict_types = 1);

// osfsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client-contracts/HttpClientInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Contracts\HttpClient\HttpClientInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8314ebecc5583710f39d69fe74b4d00ed1b89dca280a280b9b5619176ba7e3b4-8.4.18-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client-contracts/HttpClientInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Contracts\\HttpClient',
    'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
    'shortName' => 'HttpClientInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides flexible methods for requesting HTTP resources synchronously or asynchronously.
 *
 * @see HttpClientTestCase for a reference test suite
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 99,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'OPTIONS_DEFAULTS' => 
      array (
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'name' => 'OPTIONS_DEFAULTS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[
    \'auth_basic\' => null,
    // array|string - an array containing the username as first value, and optionally the
    //   password as the second one; or string like username:password - enabling HTTP Basic
    //   authentication (RFC 7617)
    \'auth_bearer\' => null,
    // string - a token enabling HTTP Bearer authorization (RFC 6750)
    \'query\' => [],
    // string[] - associative array of query string values to merge with the request\'s URL
    \'headers\' => [],
    // iterable|string[]|string[][] - headers names provided as keys or as part of values
    \'body\' => \'\',
    // array|string|resource|\\Traversable|\\Closure - the callback SHOULD yield a string
    //   smaller than the amount requested as argument; the empty string signals EOF; if
    //   an array is passed, it is meant as a form payload of field names and values
    \'json\' => null,
    // mixed - if set, implementations MUST set the "body" option to the JSON-encoded
    //   value and set the "content-type" header to a JSON-compatible value if it is not
    //   explicitly defined in the headers option - typically "application/json"
    \'user_data\' => null,
    // mixed - any extra data to attach to the request (scalar, callable, object...) that
    //   MUST be available via $response->getInfo(\'user_data\') - not used internally
    \'max_redirects\' => 20,
    // int - the maximum number of redirects to follow; a value lower than or equal to 0
    //   means redirects should not be followed; "Authorization" and "Cookie" headers MUST
    //   NOT follow except for the initial host name
    \'http_version\' => null,
    // string - defaults to the best supported version, typically 1.1 or 2.0
    \'base_uri\' => null,
    // string - the URI to resolve relative URLs, following rules in RFC 3986, section 2
    \'buffer\' => true,
    // bool|resource|\\Closure - whether the content of the response should be buffered or not,
    //   or a stream resource where the response body should be written,
    //   or a closure telling if/where the response should be buffered based on its headers
    \'on_progress\' => null,
    // callable(int $dlNow, int $dlSize, array $info) - throwing any exceptions MUST abort the
    //   request; it MUST be called on connection, on headers and on completion; it SHOULD be
    //   called on upload/download of data and at least 1/s
    \'resolve\' => [],
    // string[] - a map of host to IP address that SHOULD replace DNS resolution
    \'proxy\' => null,
    // string - by default, the proxy-related env vars handled by curl SHOULD be honored
    \'no_proxy\' => null,
    // string - a comma separated list of hosts that do not require a proxy to be reached
    \'timeout\' => null,
    // float - the idle timeout (in seconds) - defaults to ini_get(\'default_socket_timeout\')
    \'max_duration\' => 0,
    // float - the maximum execution time (in seconds) for the request+response as a whole;
    //   a value lower than or equal to 0 means it is unlimited
    \'bindto\' => \'0\',
    // string - the interface or the local socket to bind to
    \'verify_peer\' => true,
    // see https://php.net/context.ssl for the following options
    \'verify_host\' => true,
    \'cafile\' => null,
    \'capath\' => null,
    \'local_cert\' => null,
    \'local_pk\' => null,
    \'passphrase\' => null,
    \'ciphers\' => null,
    \'peer_fingerprint\' => null,
    \'capture_peer_cert_chain\' => false,
    \'crypto_method\' => \\STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
    // STREAM_CRYPTO_METHOD_TLSv*_CLIENT - minimum TLS version
    \'extra\' => [],
]',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 71,
            'startTokenPos' => 35,
            'startFilePos' => 680,
            'endTokenPos' => 321,
            'endFilePos' => 4837,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'request' => 
      array (
        'name' => 'request',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 29,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'url' => 
          array (
            'name' => 'url',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 45,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 85,
                'endLine' => 85,
                'startTokenPos' => 348,
                'startFilePos' => 5429,
                'endTokenPos' => 349,
                'endFilePos' => 5430,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 58,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Requests an HTTP resource.
 *
 * Responses MUST be lazy, but their status code MUST be
 * checked even if none of their public methods are called.
 *
 * Implementations are not required to support all options described above; they can also
 * support more custom options; but in any case, they MUST throw a TransportExceptionInterface
 * when an unsupported option is passed.
 *
 * @throws TransportExceptionInterface When an unsupported option is passed
 */',
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 97,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'aliasName' => NULL,
      ),
      'stream' => 
      array (
        'name' => 'stream',
        'parameters' => 
        array (
          'responses' => 
          array (
            'name' => 'responses',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'iterable',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 28,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 93,
                'endLine' => 93,
                'startTokenPos' => 378,
                'startFilePos' => 5887,
                'endTokenPos' => 378,
                'endFilePos' => 5890,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 67,
            'endColumn' => 88,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Contracts\\HttpClient\\ResponseStreamInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Yields responses chunk by chunk as they complete.
 *
 * @param ResponseInterface|iterable<array-key, ResponseInterface> $responses One or more responses created by the current HTTP client
 * @param float|null                                               $timeout   The idle timeout before yielding timeout chunks
 */',
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 115,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'aliasName' => NULL,
      ),
      'withOptions' => 
      array (
        'name' => 'withOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a new instance of the client with new default options.
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));