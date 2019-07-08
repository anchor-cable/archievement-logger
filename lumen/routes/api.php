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

// ------------------------------------
// routing
// ------------------------------------
$router->group(['middleware' => 'maintenance', 'prefix' => 'api/v1'], function ($app) {

    $app->get('suzuki', 'Api\SuzukiController@index');
});

