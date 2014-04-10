<?php

namespace Incubart\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Controller
 * @package Incubart\Controllers
 */
class Controller
{
    /**
     * @var Request
     */
    private $request;

    /**
     * Construct
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Do some stuff
     *
     * @return JsonResponse
     */
    public function doSomeStuffAction()
    {
        return new JsonResponse();
    }
}
