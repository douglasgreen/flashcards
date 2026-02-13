<?php

use Rector\Config\RectorConfig;
use Rector\Php81\Rector\ClassMethod\NewInInitializerRector;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/.php-cs-fixer.php',
        __DIR__ . '/rector.php',
        __DIR__ . '/bin',
        __DIR__ . '/packages',
        __DIR__ . '/public',
        __DIR__ . '/src',
    ])
    ->withPhpSets(php83: true)
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        earlyReturn: true,
        phpunitCodeQuality: true,
    )
    ->withComposerBased(
        symfony: true,
    )
    ->withRules([
        DeclareStrictTypesRector::class,
    ])
    ->withImportNames(removeUnusedImports: true)
    ->withPhpVersion(PhpVersion::PHP_83);
