<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/elizabethsimonian/freelance/wellpro/user/plugins/oerschema/blueprints.yaml',
    'modified' => 1509321438,
    'data' => [
        'name' => 'OER Schema',
        'version' => '0.1.0',
        'description' => 'Enables oerschema.org vocab for grav site content',
        'icon' => 'github',
        'author' => [
            'name' => 'Michael Collins',
            'email' => NULL
        ],
        'homepage' => 'https://open-curriculum.org',
        'demo' => NULL,
        'keywords' => 'grav, plugin, oer, oerschema',
        'bugs' => 'https://github.com/open-curriculum/grav-plugin-oerschema/issues',
        'docs' => 'https://github.com/open-curriculum/grav-plugin-oerschema',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
