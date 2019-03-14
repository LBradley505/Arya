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

    'default' => env('DB_CONNECTION', 'mysql'),

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
            'driver' => 'mysql',
            'host' => env('DB_HOST', '172.16.103.2'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'arya'),
            'username' => env('DB_USERNAME', 'arya'),
            'password' => env('DB_PASSWORD', 'green91frog'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

         'shop4be.com' => [
             'driver' => 'mysql',
             'host' => '10.10.247.1',
             'port' => '3306',
             'database' => 'shop4be',
             'username' => 'shop4be',
             'password' => 'uy4TlxzrB5eVzY',
             'charset' => 'utf8mb4',
             'collation' => 'utf8mb4_unicode_ci',
             'prefix' => '',
             'strict' => false,
             'engine' => null,
         ],



        //TEST DATABASES
        // 'db1' => [
        //     'driver' => 'mysql',
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => env('DB_DATABASE', 'test'),
        //     'username' => env('DB_USERNAME', 'test'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8mb4',
        //     'collation' => 'utf8mb4_unicode_ci',
        //     'prefix' => '',
        //     'strict' => true,
        //     'engine' => null,
        // ],
        // 'db2' => [
        //     'driver' => 'mysql',
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => env('DB_DATABASE', 'test2'),
        //     'username' => env('DB_USERNAME', 'test2'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8mb4',
        //     'collation' => 'utf8mb4_unicode_ci',
        //     'prefix' => '',
        //     'strict' => true,
        //     'engine' => null,
        // ],
//REAL DATABASES
    //DB-A


    // 'db-A' => [
    //         'shop4at.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4at',
    //             'username' => 'shop4at',
    //             'password' => 'fDeWm01Tbo6q',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4ca.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4ca',
    //             'username' => 'shop4ca',
    //             'password' => 'eVsHxmvFFkAO10Ha',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4de.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4de',
    //             'username' => 'shop4de',
    //             'password' => 'ivNmWkp8glQPKO',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4dk.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4dk',
    //             'username' => 'shop4dk',
    //             'password' => 'RKm9DTdg4EgnsBmT',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4fr.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4fr',
    //             'username' => 'shop4fr',
    //             'password' => 'L4W9wPQFeJHdTXYa',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4in.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4in',
    //             'username' => 'shop4in',
    //             'password' => '4eDhPPioDuAS',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4hongkong.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4hongkong',
    //             'username' => 'shop4hongkong',
    //             'password' => 'H85e9gG6reCp',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4italia.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4italia',
    //             'username' => 'shop4italia',
    //             'password' => 'TjOF1E9izY5h',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4world.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4world',
    //             'username' => 'shop4world',
    //             'password' => 'XWRQv3z8aq',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4nl.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4nl',
    //             'username' => 'shop4nl',
    //             'password' => '2zEDXYGeiS8f0W',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4se.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4se',
    //             'username' => 'shop4se',
    //             'password' => 'HJjRg2C43Fh5Y5',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4sg.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.3',
    //             'port' => '3306',
    //             'database' => 'shop4sg',
    //             'username' => 'shop4sg',
    //             'password' => 'FKKkKHJ7dSBh',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ]
    //     ],



    //     'db-1' => [
    //         'shop4be.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4be',
    //             'username' => 'shop4be',
    //             'password' => 'uy4TlxzrB5eVzY',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4br.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4br',
    //             'username' => 'shop4br',
    //             'password' => 'q1CMR8C9SeyCZM',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4ch.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4ch',
    //             'username' => 'shop4ch',
    //             'password' => 'm9YDhLgYD9oG',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         // 'shop4cz.com' => [
    //         //     'driver' => 'mysql',
    //         //     'host' => '10.10.247.1',
    //         //     'port' => '3306',
    //         //     'database' => 'shop4cz',
    //         //     'username' => 'shop4cz',
    //         //     'password' => '72kdTHRZwlsa4H',
    //         //     'charset' => 'utf8mb4',
    //         //     'collation' => 'utf8mb4_unicode_ci',
    //         //     'prefix' => '',
    //         //     'strict' => false,
    //         //     'engine' => null,
    //         // ],
    //         'shop4es.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4es',
    //             'username' => 'shop4es',
    //             'password' => 'IvRfr64e8VFPTG',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4ie.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4ie',
    //             'username' => 'shop4ie',
    //             'password' => 'LUBcZJ6mUOv4Yn',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4indonesia.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4indonesia',
    //             'username' => 'shop4indonesia',
    //             'password' => 'kAcIfdLiJXLC',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4jp.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4jp',
    //             'username' => 'shop4jp',
    //             'password' => 'VmrBK0AoeTdj',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4malaysia.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4malaysia',
    //             'username' => 'shop4malaysia',
    //             'password' => 'XwUEoTjF5IKh',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4megastore.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4megastore',
    //             'username' => 'shop4megastore',
    //             'password' => 'eM5782KWEoi-d',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4no.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4no',
    //             'username' => 'shop4no',
    //             'password' => 'PeDJ9rwUfuH3eNTU',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4pl.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4pl',
    //             'username' => 'shop4pl',
    //             'password' => 'PdC8pBpZ0BC3',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4pt.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4pt',
    //             'username' => 'shop4pt',
    //             'password' => 'uTiNu01UsocUi5',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4tr.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4tr',
    //             'username' => 'shop4tr',
    //             'password' => 'DbaVPdh5tgy6',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ],
    //         'shop4za.com' => [
    //             'driver' => 'mysql',
    //             'host' => '10.10.247.1',
    //             'port' => '3306',
    //             'database' => 'shop4za',
    //             'username' => 'shop4za',
    //             'password' => 'zyOla2ugHztP',
    //             'charset' => 'utf8mb4',
    //             'collation' => 'utf8mb4_unicode_ci',
    //             'prefix' => '',
    //             'strict' => false,
    //             'engine' => null,
    //         ]
    //     ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

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
