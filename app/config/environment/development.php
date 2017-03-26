<?php

return [
    'base_path' => 'http://yona-cms.dev/',

    'database'  => [
        'adapter'  => 'Mysql',
        'host'     => 'mysql',
        'username' => 'root',
        'password' => 'secret',
        'dbname'   => 'yona-cms',
        'charset'  => 'utf8',
    ],

    'memcache'  => [
        'host' => 'memcache',
        'port' => 11211,
    ],

    'memcached'  => [
        'host' => 'memcached',
        'port' => 11211,
    ],

    'cache'     => 'file', // memcache, memcached
];