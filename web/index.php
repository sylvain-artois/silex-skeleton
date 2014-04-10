<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

# Prod mode
$app['env'] = 'prod';

require __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';
require __DIR__.'/../config/security.php';

# App run
$app->run();
