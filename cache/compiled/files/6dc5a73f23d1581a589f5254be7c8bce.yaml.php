<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/elizabethsimonian/Freelance/niazi/new-blog/user/config/plugins/git-sync.yaml',
    'modified' => 1509576127,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/esimonian/wellpro.git',
        'user' => 'esimonian',
        'password' => 'gitsync-def502009d8d8e7774977e79572ce48227d45033af5f55dad1e193f417c13151334a61146db81a0154e642ad7b739b208656690a558e16e23f4d950ca5ef1e15dc974ad401cc5ddc96d64f4c0f1e103f649293acab1fc703682b119bba98cd5a6a67',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];