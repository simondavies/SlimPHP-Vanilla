<?php
return [
        'driver'    => 'mysql',
        'host'      => getenv('DB_HOST'),
        'port'      => '33060',
        'database'  => getenv('DB_NAME'),
        'username'  => getenv('DB_USERNAME'),
        'password'  => getenv('DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
];