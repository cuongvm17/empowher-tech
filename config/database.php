<?php

declare(strict_types=1);

return [

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => get_mysql_host_from_env(),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'test'),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'collation' => env('DB_COLLATION', 'utf8_general_ci'),
            'prefix' => env('DB_PREFIX', ''),
            'strict' => env('DB_STRICT_MODE', false),
            'engine' => env('DB_ENGINE', null),
            'timezone' => env('DB_TIMEZONE', '+07:00'),
        ],
    ],

    'migrations' => 'migrations',

    'redis' => [
        'client' => 'phpredis',
        'options' => [
            'cluster' => 'redis',
        ],
        'cluster' => true,
        'clusters' => [
            'default' => env('REDIS_HOST'),
            'options' => [
                'persistent' => true,
                'timeout' => 1,
                'read_timeout' => 1,
            ]
        ],
    ],
];
