<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteorderProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/orders', 'ApiController@all_orders');
Route::get('orders/{order}', 'ApiController@show_order');
Route::post('orders', 'ApiController@store_order');
Route::put('orders/{order}', 'ApiController@update_order');
Route::delete('orders/{order}', 'ApiController@delete_order');


Route::get('/users', 'ApiController@all_users');
Route::get('user/{user}', 'ApiController@show_user');
Route::post('user', 'ApiController@store_user');
Route::put('user/{user}', 'ApiController@update_user');
Route::delete('user/{user}', 'ApiController@delete_user');
