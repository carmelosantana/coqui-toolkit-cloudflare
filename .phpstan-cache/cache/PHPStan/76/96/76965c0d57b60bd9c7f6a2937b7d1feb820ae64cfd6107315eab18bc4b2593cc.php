<?php declare(strict_types = 1);

// osfsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client/HttpClient.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpClient\HttpClient
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a92d3f9a7e75bd8f2a49f08d310eece4e4c8e9d08457c2df2def394469213a0f-8.4.18-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../symfony/http-client/HttpClient.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\HttpClient',
    'name' => 'Symfony\\Component\\HttpClient\\HttpClient',
    'shortName' => 'HttpClient',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * A factory to instantiate the best possible HTTP client for the runtime.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 79,
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
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'defaultOptions' => 
          array (
            'name' => 'defaultOptions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 54,
                'startFilePos' => 968,
                'endTokenPos' => 55,
                'endFilePos' => 969,
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 35,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'maxHostConnections' => 
          array (
            'name' => 'maxHostConnections',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 64,
                'startFilePos' => 998,
                'endTokenPos' => 64,
                'endFilePos' => 998,
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 63,
            'endColumn' => 89,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'maxPendingPushes' => 
          array (
            'name' => 'maxPendingPushes',
            'default' => 
            array (
              'code' => '50',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 73,
                'startFilePos' => 1025,
                'endTokenPos' => 73,
                'endFilePos' => 1026,
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
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 92,
            'endColumn' => 117,
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
            'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array $defaultOptions     Default request\'s options
 * @param int   $maxHostConnections The maximum number of connections to a single host
 * @param int   $maxPendingPushes   The maximum number of pushed responses to accept in the queue
 *
 * @see HttpClientInterface::OPTIONS_DEFAULTS for available options
 */',
        'startLine' => 32,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpClient',
        'declaringClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'implementingClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'currentClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'aliasName' => NULL,
      ),
      'createForBaseUri' => 
      array (
        'name' => 'createForBaseUri',
        'parameters' => 
        array (
          'baseUri' => 
          array (
            'name' => 'baseUri',
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
            'startColumn' => 45,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'defaultOptions' => 
          array (
            'name' => 'defaultOptions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 447,
                'startFilePos' => 3223,
                'endTokenPos' => 448,
                'endFilePos' => 3224,
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
            'startColumn' => 62,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'maxHostConnections' => 
          array (
            'name' => 'maxHostConnections',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 457,
                'startFilePos' => 3253,
                'endTokenPos' => 457,
                'endFilePos' => 3253,
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 90,
            'endColumn' => 116,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'maxPendingPushes' => 
          array (
            'name' => 'maxPendingPushes',
            'default' => 
            array (
              'code' => '50',
              'attributes' => 
              array (
                'startLine' => 73,
                'endLine' => 73,
                'startTokenPos' => 466,
                'startFilePos' => 3280,
                'endTokenPos' => 466,
                'endFilePos' => 3281,
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 119,
            'endColumn' => 144,
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
            'name' => 'Symfony\\Contracts\\HttpClient\\HttpClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a client that adds options (e.g. authentication headers) only when the request URL matches the provided base URI.
 */',
        'startLine' => 73,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\HttpClient',
        'declaringClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'implementingClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
        'currentClassName' => 'Symfony\\Component\\HttpClient\\HttpClient',
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