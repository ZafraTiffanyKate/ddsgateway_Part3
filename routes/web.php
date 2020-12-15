<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
/*$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'],function() use ($router){

    $router->get('/users1','User1Controller@index');
    $router->post('/users1','User1Controller@addUser1');
    $router->get('/users1/{id}','User1Controller@showId1');
    $router->put('/users1/{id}','User1Controller@updateUser1');
    $router->patch('/users1/{id}','User1Controller@updateUser1');
    $router->delete('/users1/{id}', 'User1Controller@deleteUser1'); 

    $router->get('/users2','User2Controller@index');
    $router->post('/users2','User2Controller@addUser2');
    $router->get('/users2/{id}','User2Controller@showId2');
    $router->put('/users2/{id}','User2Controller@updateUser2');
    $router->patch('/users2/{id}','User2Controller@updateUser2');
    $router->delete('/users2/{id}','User2Controller@deleteUser2');

});


