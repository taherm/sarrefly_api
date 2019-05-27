<?php

use Illuminate\Http\Request;
use App\Driver;

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

Route::get('/orders', 'ApiController@all_orders')->middleware('auth:api');
//Route::get('orders/{order}', 'ApiController@show_order');
Route::post('orders', 'ApiController@store_order')->middleware('auth:api');
Route::put('orders/{order}', 'ApiController@update_order')->middleware('auth:api');
Route::delete('orders/{order}', 'ApiController@delete_order')->middleware('auth:api');


Route::get('/users', 'ApiController@all_users')->middleware('auth:api');
Route::get('user/{user}', 'ApiController@show_user');
Route::post('user', 'ApiController@store_user');
Route::put('user/{user}', 'ApiController@update_user')->middleware('auth:api');
Route::delete('user/{user}', 'ApiController@delete_user')->middleware('auth:api');


Route::get('/user', 'ApiController@login');
Route::get('orders/{id}', 'ApiController@show_user_order')->middleware('auth:api');

Route::get('verifytoken', 'ApiController@verify_token');

Route::get('rate', 'ApiController@get_rate')->middleware('auth:api');

Route::get('rates', 'ApiController@all_rates')->middleware('auth:api');

Route::get('saved_orders/{id}', 'ApiController@saved_orders')->middleware('auth:api');

Route::post('make_payment', 'ApiController@make_payment')->middleware('auth:api');

Route::get('success_orders', 'ApiController@success_orders');



Route::post('/location', function (Request $request) {
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '71d738b559f95f3c22c2',
        '7dc73d4a265bd2eb87f2',
        '770515',
        $options
    );

    // Driver::updateOrCreate(
    //    ['id' => 1],
    //    ['latitude' => $request->latitude, 'longitude' => $request->longitude]
    // );


    $driver_data = Driver::first();
    if ($driver_data == null) {
        Driver::create($request->all);
    } else {
        $driver_data->update($request->all());
    }

    //  Driver::first()->updateOrCreate($request->all());


    $data['latitude'] = $request->latitude;
    $data['longitude'] = $request->longitude;

    $pusher->trigger('my-channel', 'my-event', $data);
    // dd("done!");




});
