<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/elizabethsimonian/freelance/wellpro/user/config/site.yaml',
    'modified' => 1509319815,
    'data' => [
        'title' => 'Wellpro',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Stephanie Niazi',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Well Pro Dubai Blog'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
