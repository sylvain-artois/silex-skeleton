<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(E_ALL);

$app = new Silex\Application();

# Dev mode
$app['debug'] = true;
$app['env'] = 'dev';

require __DIR__.'/../src/app.php';
require __DIR__.'/../config/dev.php';
require __DIR__.'/../config/security.php';

# App run
$app->run();
