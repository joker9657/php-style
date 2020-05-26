<?php

// 配置规则：https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16
// last reviewed: v2.16.3 Yellow Bird

return [
    '@PSR2' => true, // 遵循 psr2 标准
    'array_syntax' => [
        'syntax' => 'short' // 数组必须使用中括号 [] 而不是 array() All classes must be final, except abstract ones and Doctrine entities.
    ],
    'final_class' => false, // All classes must be final, except abstract ones and Doctrine entities.
    'new_with_braces' => true, // 使用 new 创建的所有实例后必须带有括号 All instances created with new keyword must be followed by braces.
    'blank_line_before_statement' => [ // 在这些关键字前必须空一行 An empty line feed must precede any configured statement.
        'break',
        'continue',
        'return',
    ],
];