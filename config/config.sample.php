<?php

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array(
        'dbname' => array(
            'driver' => 'pdo_mysql',
            'host'   => 'host',
            'user' => 'user',
            'password' => 'password',
            'dbname' => 'dbname'
        ),
    ),
));

