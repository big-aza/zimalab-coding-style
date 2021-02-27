<?php

declare(strict_types=1);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12'                        => true,
        '@PSR12:risky'                  => true,
        'declare_strict_types'          => true,
        'final_class'                   => true,
        'no_superfluous_phpdoc_tags'    => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_summary'                => true,
        'logical_operators'             => true,
        'void_return'                   => true,
        'binary_operator_spaces'        => ['operators' => ['=>' => 'align_single_space_minimal', '=' => 'align_single_space_minimal']],
        'array_syntax'                  => ['syntax' => 'short'],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->exclude(['vendor', 'var', 'app', 'bin', 'public', 'config'])
        ->notPath('tests/_*')
        ->notPath('src/Kernel.php')
        ->in(getcwd())
        ->in(__DIR__)
    )
;
