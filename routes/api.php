<?php

/** @var Router $router */

use Laravel\Lumen\Routing\Router;

$router->get("/", function () {
    return view('index');
});

$router->group([
    'prefix' => 'api/v1',
], function ($router) {
    $router->get('users', 'UserController@listUser');
    $router->get('users/{id}', 'UserController@detail');
    $router->post('users', 'UserController@create');
    $router->delete('users/{id}', 'UserController@delete');
});