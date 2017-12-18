<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/config/groups.yaml',
    'modified' => 1506838823,
    'data' => [
        'Owners' => [
            'groupname' => 'Owners',
            'access' => [
                'admin' => [
                    'super' => 'false',
                    'login' => 'true',
                    'cache' => 'true',
                    'configuration' => 'true',
                    'configuration_system' => 'true',
                    'configuration_site' => 'true',
                    'configuration_media' => 'true',
                    'configuration_info' => 'true',
                    'settings' => 'true',
                    'pages' => 'true',
                    'maintenance' => 'true',
                    'statistics' => 'true',
                    'plugins' => 'true',
                    'themes' => 'false',
                    'users' => 'true'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'true',
                    'groups' => 'true',
                    'users_expert' => 'true'
                ]
            ]
        ]
    ]
];
