<?php declare(strict_types = 1);

// osfsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client-contracts/ResponseInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Contracts\HttpClient\ResponseInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-1489049e6948a726928fecb912b930a4f6ff637735a528af4852850a099f739e-8.4.18-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client-contracts/ResponseInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Contracts\\HttpClient',
    'name' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
    'shortName' => 'ResponseInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A (lazily retrieved) HTTP response.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 108,
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
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getStatusCode' => 
      array (
        'name' => 'getStatusCode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the HTTP status code of the response.
 *
 * @throws TransportExceptionInterface when a network error occurs
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getHeaders' => 
      array (
        'name' => 'getHeaders',
        'parameters' => 
        array (
          'throw' => 
          array (
            'name' => 'throw',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 46,
                'endLine' => 46,
                'startTokenPos' => 70,
                'startFilePos' => 1609,
                'endTokenPos' => 70,
                'endFilePos' => 1612,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 32,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the HTTP headers of the response.
 *
 * @param bool $throw Whether an exception should be thrown on 3/4/5xx status codes
 *
 * @return array<string, list<string>> The headers of the response keyed by header names in lowercase
 *
 * @throws TransportExceptionInterface   When a network error occurs
 * @throws RedirectionExceptionInterface On a 3xx when $throw is true and the "max_redirects" option has been reached
 * @throws ClientExceptionInterface      On a 4xx when $throw is true
 * @throws ServerExceptionInterface      On a 5xx when $throw is true
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getContent' => 
      array (
        'name' => 'getContent',
        'parameters' => 
        array (
          'throw' => 
          array (
            'name' => 'throw',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 91,
                'startFilePos' => 2173,
                'endTokenPos' => 91,
                'endFilePos' => 2176,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 32,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the response body as a string.
 *
 * @param bool $throw Whether an exception should be thrown on 3/4/5xx status codes
 *
 * @throws TransportExceptionInterface   When a network error occurs
 * @throws RedirectionExceptionInterface On a 3xx when $throw is true and the "max_redirects" option has been reached
 * @throws ClientExceptionInterface      On a 4xx when $throw is true
 * @throws ServerExceptionInterface      On a 5xx when $throw is true
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
          'throw' => 
          array (
            'name' => 'throw',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 71,
                'endLine' => 71,
                'startTokenPos' => 112,
                'startFilePos' => 2860,
                'endTokenPos' => 112,
                'endFilePos' => 2863,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 71,
            'endLine' => 71,
            'startColumn' => 29,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the response body decoded as array, typically from a JSON payload.
 *
 * @param bool $throw Whether an exception should be thrown on 3/4/5xx status codes
 *
 * @throws DecodingExceptionInterface    When the body cannot be decoded to an array
 * @throws TransportExceptionInterface   When a network error occurs
 * @throws RedirectionExceptionInterface On a 3xx when $throw is true and the "max_redirects" option has been reached
 * @throws ClientExceptionInterface      On a 4xx when $throw is true
 * @throws ServerExceptionInterface      On a 5xx when $throw is true
 */',
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'cancel' => 
      array (
        'name' => 'cancel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Closes the response stream and all related buffers.
 *
 * No further chunk will be yielded after this method has been called.
 */',
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getInfo' => 
      array (
        'name' => 'getInfo',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 148,
                'startFilePos' => 4803,
                'endTokenPos' => 148,
                'endFilePos' => 4806,
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
                      'name' => 'string',
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
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 29,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns info coming from the transport layer.
 *
 * This method SHOULD NOT throw any ExceptionInterface and SHOULD be non-blocking.
 * The returned info is "live": it can be empty and can change from one call to
 * another, as the request/response progresses.
 *
 * The following info MUST be returned:
 *  - canceled (bool) - true if the response was canceled using ResponseInterface::cancel(), false otherwise
 *  - error (string|null) - the error message when the transfer was aborted, null otherwise
 *  - http_code (int) - the last response code or 0 when it is not known yet
 *  - http_method (string) - the HTTP verb of the last request
 *  - redirect_count (int) - the number of redirects followed while executing the request
 *  - redirect_url (string|null) - the resolved location of redirect responses, null otherwise
 *  - response_headers (array) - an array modelled after the special $http_response_header variable
 *  - start_time (float) - the time when the request was sent or 0.0 when it\'s pending
 *  - url (string) - the last effective URL of the request
 *  - user_data (mixed) - the value of the "user_data" request option, null if not set
 *
 * When the "capture_peer_cert_chain" option is true, the "peer_certificate_chain"
 * attribute SHOULD list the peer certificates as an array of OpenSSL X.509 resources.
 *
 * Other info SHOULD be named after curl_getinfo()\'s associative return value.
 *
 * @return mixed An array of all available info, or one of them when $type is
 *               provided, or null when an unsupported type is requested
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\HttpClient',
        'declaringClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'implementingClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
        'currentClassName' => 'Symfony\\Contracts\\HttpClient\\ResponseInterface',
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