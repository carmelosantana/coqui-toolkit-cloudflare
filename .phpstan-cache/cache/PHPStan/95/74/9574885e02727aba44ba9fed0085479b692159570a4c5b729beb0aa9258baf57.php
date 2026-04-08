<?php declare(strict_types = 1);

// odsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/Tool/AccountTool.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CoquiBot\Toolkits\Cloudflare\Tool\AccountTool
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.18-29995ecad440e23118b5554fb26dbe35872178da66f136d10778553abccf5aa4',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/src/Tool/AccountTool.php',
      ),
    ),
    'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
    'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
    'shortName' => 'AccountTool',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 65568,
    'docComment' => '/**
 * List and inspect Cloudflare accounts.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 82,
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
      'client' => 
      array (
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'name' => 'client',
        'modifiers' => 4,
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
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 9,
        'endColumn' => 40,
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
          'client' => 
          array (
            'name' => 'client',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CoquiBot\\Toolkits\\Cloudflare\\Runtime\\CloudflareClient',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 20,
            'endLine' => 20,
            'startColumn' => 9,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'aliasName' => NULL,
      ),
      'build' => 
      array (
        'name' => 'build',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 23,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 30,
            'endColumn' => 40,
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
            'name' => 'CarmeloSantana\\PHPAgents\\Tool\\ToolResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $args
 */',
        'startLine' => 48,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'aliasName' => NULL,
      ),
      'listAccounts' => 
      array (
        'name' => 'listAccounts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CarmeloSantana\\PHPAgents\\Tool\\ToolResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 59,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'aliasName' => NULL,
      ),
      'getAccount' => 
      array (
        'name' => 'getAccount',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
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
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 33,
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
            'name' => 'CarmeloSantana\\PHPAgents\\Tool\\ToolResult',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<string, mixed> $args
 */',
        'startLine' => 68,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool',
        'declaringClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'implementingClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
        'currentClassName' => 'CoquiBot\\Toolkits\\Cloudflare\\Tool\\AccountTool',
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