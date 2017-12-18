<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/themes/soho/blueprints.yaml',
    'modified' => 1509580443,
    'data' => [
        'name' => 'Soho',
        'version' => '0.1.0',
        'description' => 'SOHO blog theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Esimonian',
            'email' => 'esimonian16@gmail.com'
        ],
        'homepage' => 'https://github.com/esimonian/grav-theme-soho',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/esimonian/grav-theme-soho/issues',
        'readme' => 'https://github.com/esimonian/grav-theme-soho/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
