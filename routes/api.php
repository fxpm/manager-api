<?php

use Illuminate\Http\Request;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1',
    'namespace' => 'API\\v1',
    'middleware' => ['auth:api'],
], function () {
    Route::get('/', 'StatusController@index');
});

JsonApi::register('v1', ['namespace' => 'API\v1', 'middleware' => ['auth:api']], function ($api, $router) {
    $api->resource('users');
    $api->resource('servers');
    $api->resource('commands', [
        'controller' => true,
        'has-one' => ['server']
    ]);
    $api->resource('actions', [
        'controller' => true,
        'has-one' => ['server']
    ]);
});
