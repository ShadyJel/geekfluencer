<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

    /**
     * API Route for interest
     * 
     * @return $route
     */
    $router->group(['prefix' => 'api/'], function($router)
    {
//      $router->get('totalreward', ['middleware' => ['cors','auth'], 'uses' => 'RedisController@totalreward']);
        $router->get('/interest', 'InterestsController@index');
        $router->post('/interest', 'InterestsController@store');
        $router->post('/interest/update', 'InterestsController@update');
        $router->post('/interest/delete', 'InterestsController@delete');
    });
    $router->get('/users', 'UsersController@index');
    $router->post('/users', 'UsersController@adduser');



