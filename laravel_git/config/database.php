<?php

return [
    'default' => 'mysql',
    'connections' => [
      'mysql' => [
        'read' => [
            'host' => 'localhost',
        ],
        'write' => [
            'host' => 'localhost'
        ],
        'sticky'    => true,
        'driver'    => 'mysql',
        'database'  => 'laravel_db',
        'username'  => 'root',
        'password'  => '1234',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
      ],
    ],
    'migrations' => 'migrations',
    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
