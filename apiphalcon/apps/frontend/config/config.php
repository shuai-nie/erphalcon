<?php

return new \Phalcon\Config([
    'database' => [
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'apiphalcon',
        'charset'  => 'utf8',
    ],
    'application' => [
        'controllersDir' => __DIR__ . '/../controllers/',
        'modelsDir'      => __DIR__ . '/../models/',
        'migrationsDir'  => __DIR__ . '/../migrations/',
        'viewsDir'       => __DIR__ . '/../views/',
        'baseUri'        => '/apiphalcon/'
    ]
]);
