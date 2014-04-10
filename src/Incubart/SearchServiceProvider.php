<?php

namespace Incubart;

use Incubart\Controllers\Controller;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Class SearchServiceProvider
 * @package Incubart
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Silex\Application $app
     */
    public function register(Application $app)
    {
        # Register controller
        $app['controller'] = $app->share(function() use ($app) {
            return new Controller($app['request']);
        });
    }

    /**
     * {@inheritDoc}
     *
     * @param \Silex\Application $app
     */
    public function boot(Application $app)
    {
    }
}
