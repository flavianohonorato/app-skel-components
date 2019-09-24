<?php
/**
 * Created by PhpStorm.
 * User: honorato
 * Date: 24/09/19
 * Time: 15:33
 */

require_once __DIR__ . '/../bootstrap.php';

$container = new \Illuminate\Container\Container();

$request = \Illuminate\Http\Request::capture();

$container->instance(\Illuminate\Http\Request::class, $request);

$events = (new \Illuminate\Events\Dispatcher($container));

$router = (new \Illuminate\Routing\Router($events,$container));

$redirect = (new \Illuminate\Routing\Redirector(
    new \Illuminate\Routing\UrlGenerator($router->getRoutes(),$request))
);

$response = $router->dispatch($request);

$response->send();


