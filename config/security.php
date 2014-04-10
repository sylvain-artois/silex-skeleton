<?php

use Silex\Route\SecurityTrait;

/**
 * Configure some request matcher
 */
$matcher = new \Symfony\Component\HttpFoundation\RequestMatcher();

/**
 * App custom firewall
 */
$app->before(function() use ($app, $matcher) {

    if($matcher->matches($app['request'])) {
        return $app->json(array('Message' => 'You shall not pass !'), 403);
    }
});
