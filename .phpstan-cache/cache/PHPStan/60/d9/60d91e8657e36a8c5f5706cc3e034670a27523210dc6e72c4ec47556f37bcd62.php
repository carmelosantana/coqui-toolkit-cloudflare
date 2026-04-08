<?php declare(strict_types = 1);

// odsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/Runtime/CloudflareClient.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CoquiBot\Toolkits\Cloudflare\Runtime\CloudflareClient
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.18-dc7678a32ebb33dd10db9c1a2b4fcf05fad37866d541d8a33b252e37cfe3a772',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/Runtime/CloudflareClient.php',
      ),
    ),
    'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
    'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
    'shortName' => 'CloudflareClient',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Low-level HTTP client for the Cloudflare REST API v4.
 *
 * Handles authentication, request dispatch, response parsing,
 * and automatic pagination. All tool classes delegate to this client.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 271,
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
      'BASE_URL' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'BASE_URL',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'value' => 
        array (
          'code' => '\'https://api.cloudflare.com/client/v4\'',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 55,
            'startFilePos' => 590,
            'endTokenPos' => 55,
            'endFilePos' => 627,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 75,
      ),
      'TIMEOUT' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'TIMEOUT',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'value' => 
        array (
          'code' => '30',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 68,
            'startFilePos' => 662,
            'endTokenPos' => 68,
            'endFilePos' => 663,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'MAX_PER_PAGE' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'MAX_PER_PAGE',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'value' => 
        array (
          'code' => '50',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 81,
            'startFilePos' => 703,
            'endTokenPos' => 81,
            'endFilePos' => 704,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
    ),
    'immediateProperties' => 
    array (
      'resolvedToken' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'resolvedToken',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 92,
            'startFilePos' => 744,
            'endTokenPos' => 92,
            'endFilePos' => 745,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resolvedAccountId' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'resolvedAccountId',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 103,
            'startFilePos' => 788,
            'endTokenPos' => 103,
            'endFilePos' => 789,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'apiToken' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'apiToken',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 9,
        'endColumn' => 46,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'accountId' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'accountId',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 9,
        'endColumn' => 47,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'httpClient' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'name' => 'httpClient',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 9,
        'endColumn' => 109,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'apiToken' => 
          array (
            'name' => 'apiToken',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 123,
                'startFilePos' => 870,
                'endTokenPos' => 123,
                'endFilePos' => 871,
              ),
            ),
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 9,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'accountId' => 
          array (
            'name' => 'accountId',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 136,
                'startFilePos' => 919,
                'endTokenPos' => 136,
                'endFilePos' => 920,
              ),
            ),
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 9,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'httpClient' => 
          array (
            'name' => 'httpClient',
            'default' => 
            array (
              'code' => 'new \\Symfony\\Component\\HttpClient\\CurlHttpClient()',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 149,
                'startFilePos' => 982,
                'endTokenPos' => 153,
                'endFilePos' => 1031,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 9,
            'endColumn' => 109,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 27,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'fromEnv' => 
      array (
        'name' => 'fromEnv',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a client from environment variables.
 */',
        'startLine' => 36,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 49,
                'endLine' => 49,
                'startTokenPos' => 233,
                'startFilePos' => 1527,
                'endTokenPos' => 234,
                'endFilePos' => 1528,
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 43,
            'endColumn' => 59,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $query
 */',
        'startLine' => 49,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'post' => 
      array (
        'name' => 'post',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 26,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'body' => 
          array (
            'name' => 'body',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 282,
                'startFilePos' => 1740,
                'endTokenPos' => 283,
                'endFilePos' => 1741,
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 44,
            'endColumn' => 59,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $body
 */',
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'put' => 
      array (
        'name' => 'put',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'body' => 
          array (
            'name' => 'body',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 65,
                'endLine' => 65,
                'startTokenPos' => 331,
                'startFilePos' => 1951,
                'endTokenPos' => 332,
                'endFilePos' => 1952,
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 43,
            'endColumn' => 58,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $body
 */',
        'startLine' => 65,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'patch' => 
      array (
        'name' => 'patch',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 27,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'body' => 
          array (
            'name' => 'body',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 380,
                'startFilePos' => 2163,
                'endTokenPos' => 381,
                'endFilePos' => 2164,
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 45,
            'endColumn' => 60,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $body
 */',
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 28,
            'endColumn' => 43,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 30,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 462,
                'startFilePos' => 2804,
                'endTokenPos' => 463,
                'endFilePos' => 2805,
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 48,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'maxPages' => 
          array (
            'name' => 'maxPages',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 472,
                'startFilePos' => 2824,
                'endTokenPos' => 472,
                'endFilePos' => 2825,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 67,
            'endColumn' => 84,
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
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetch all pages of a paginated endpoint and merge results.
 *
 * @param array<string, mixed> $query
 * @param int $maxPages Safety cap to prevent runaway pagination
 * @return CloudflareResult Combined result with merged data array
 */',
        'startLine' => 92,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'requireAccountId' => 
      array (
        'name' => 'requireAccountId',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve the account ID, returning an error result if missing.
 */',
        'startLine' => 134,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
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
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 9,
            'endColumn' => 22,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 801,
                'startFilePos' => 4625,
                'endTokenPos' => 802,
                'endFilePos' => 4626,
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
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'body' => 
          array (
            'name' => 'body',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 158,
                'endLine' => 158,
                'startTokenPos' => 811,
                'startFilePos' => 4651,
                'endTokenPos' => 812,
                'endFilePos' => 4652,
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
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $query
 * @param array<string, mixed> $body
 */',
        'startLine' => 154,
        'endLine' => 219,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'filterQuery' => 
      array (
        'name' => 'filterQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 34,
            'endColumn' => 45,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove null/empty-string values from query parameters.
 *
 * @param array<string, mixed> $query
 * @return array<string, mixed>
 */',
        'startLine' => 227,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'resolveApiToken' => 
      array (
        'name' => 'resolveApiToken',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 232,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'resolveAccountId' => 
      array (
        'name' => 'resolveAccountId',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 249,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'aliasName' => NULL,
      ),
      'envString' => 
      array (
        'name' => 'envString',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 39,
            'endColumn' => 50,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 266,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
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