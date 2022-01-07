<?php

namespace Mesostiche;

return [
    'block_layouts' => [
        'invokables' => [
            'mesostiche' => Site\BlockLayout\Mesostiche::class,
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'mesostiche' => Service\ViewHelper\MesosticheFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ],
];
