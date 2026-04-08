<?php declare(strict_types = 1);

// osfsl-/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../carmelosantana/php-agents/src/Contract/ToolInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CarmeloSantana\PHPAgents\Contract\ToolInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-85d5c9499623507748da7049cd2f5b8cae4f8d8b030b10abaa7963493a157a9b-8.4.18-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'filename' => '/Users/carmelo/Projects/CoquiBot/Toolkits/coqui-toolkit-cloudflare/vendor/composer/../carmelosantana/php-agents/src/Contract/ToolInterface.php',
      ),
    ),
    'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
    'name' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
    'shortName' => 'ToolInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Contract for tools that agents can call.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 45,
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
      'name' => 
      array (
        'name' => 'name',
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
        'docComment' => '/**
 * Unique name for this tool (snake_case).
 */',
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
        'declaringClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'implementingClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'currentClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'aliasName' => NULL,
      ),
      'description' => 
      array (
        'name' => 'description',
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
        'docComment' => '/**
 * Human-readable description.
 */',
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
        'declaringClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'implementingClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'currentClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'aliasName' => NULL,
      ),
      'parameters' => 
      array (
        'name' => 'parameters',
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
 * Typed parameter definitions for this tool.
 *
 * @return Parameter[]
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
        'declaringClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'implementingClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'currentClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 29,
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
 * Execute the tool with validated input.
 *
 * @param array<string, mixed> $input Validated parameter values
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
        'declaringClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'implementingClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'currentClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'aliasName' => NULL,
      ),
      'toFunctionSchema' => 
      array (
        'name' => 'toFunctionSchema',
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
 * Convert this tool definition to an OpenAI-compatible function schema.
 *
 * @return array{type: string, function: array{name: string, description: string, parameters: array<string, mixed>}}
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CarmeloSantana\\PHPAgents\\Contract',
        'declaringClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'implementingClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
        'currentClassName' => 'CarmeloSantana\\PHPAgents\\Contract\\ToolInterface',
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