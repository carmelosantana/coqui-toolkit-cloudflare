<?php declare(strict_types = 1);

// odsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/CloudflareToolkit.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CoquiBot\Toolkits\Cloudflare\CloudflareToolkit
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.18-f18c199ca624ec12a63f7fbacf43ef1170c1701669654b80a3d32d7fd298780d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/CloudflareToolkit.php',
      ),
    ),
    'namespace' => 'CoquiBot\\Toolkits\\Cloudflare',
    'name' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
    'shortName' => 'CloudflareToolkit',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Cloudflare management toolkit for Coqui.
 *
 * Provides comprehensive Cloudflare API v4 access: DNS records, tunnels,
 * zones, firewall rules, WAF, page rules, and analytics.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 98,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CarmeloSantana\\PHPAgents\\Contract\\ToolkitInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'client' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'name' => 'client',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
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
          'client' => 
          array (
            'name' => 'client',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 30,
                'endLine' => 30,
                'startTokenPos' => 107,
                'startFilePos' => 1016,
                'endTokenPos' => 107,
                'endFilePos' => 1019,
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
                      'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
                      'isIdentifier' => false,
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
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 9,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 29,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'aliasName' => NULL,
      ),
      'tools' => 
      array (
        'name' => 'tools',
        'parameters' => 
        array (
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
 * @return array<\\CarmeloSantana\\PHPAgents\\Contract\\ToolInterface>
 */',
        'startLine' => 38,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'aliasName' => NULL,
      ),
      'guidelines' => 
      array (
        'name' => 'guidelines',
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
        'startLine' => 53,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\CloudflareToolkit',
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