<?php
/**
 * Created by PhpStorm.
 * User: honorato
 * Date: 24/09/19
 * Time: 15:33
 */

require_once __DIR__ . '/../bootstrap.php';

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;

// database
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection([
    "driver"    => "mysql",
    "host"      =>  DB_HOST,
    "database"  =>  DB_NAME,
    "username"  =>  DB_USER,
    "password"  =>  DB_PASSWORD,
    'charset'   =>  DB_CHARSET,
    'collation' => 'utf8_unicode_ci',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$container = new Container();
$request = Request::capture();
$container->instance('Illuminate\Http\Request', $request);
$events = new Dispatcher($container);
$router = new Router($events, $container);

require_once __DIR__ . '/../src' . DS . 'routes.php';

$redirect = new Redirector(
    new UrlGenerator($router->getRoutes(),$request)
);

$response = $router->dispatch($request);

$response->send();


