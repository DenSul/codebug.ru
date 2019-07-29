<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */
    'default'     => env('DB_CONNECTION', 'mysql'),
    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'connections' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE'),
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'pgsql' => [
            'driver'         => 'pgsql',
            'host'           => env('DB_HOST', 'postgres'),
            'database'       => env('DB_DATABASE', 'app'),
            'username'       => env('DB_USERNAME', 'forge'),
            'password'       => env('DB_PASSWORD', 'secret'),
            'charset'        => 'utf8',
            'collation'      => 'utf8_unicode_ci',
            'prefix'         => '',
            'prefix_indexes' => true,
            'strict'         => false,
            'schema'         => env('DB_SCHEMA', 'public'),
            'sslmode'        => 'prefer',
        ],
    ],

    'migrations' => 'migrations',
];
