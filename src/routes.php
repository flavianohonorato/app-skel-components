<?php
/**
 * Created by PhpStorm.
 * User: honorato
 * Date: 24/09/19
 * Time: 15:33
 */

use Illuminate\Routing\Router;

$router->group(['namespace' => 'App\Controllers'], function (Router $router) {
    $router->get('/', ['name' => 'users.index', 'uses' => 'UsersController@index']);
    $router->get('/users', ['name' => 'users.index', 'uses' => 'UsersController@index']);
    $router->get('/users/store', ['name' => 'users.store', 'uses' => 'UsersController@store']);
});
