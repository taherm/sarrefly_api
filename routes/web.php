<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    $orders = \App\Order::all();
    //dd($orders);
    return view('orders', compact('orders'));
})->middleware('auth');


Route::get('user/{id}', function ($id) {
    $user = \App\User::find($id);
    $user_orders = $user->orders;
    $user_name = $user->name;
    //dd($user_orders);

    return view('user_orders', compact('user_orders', 'user_name'));
})->middleware('auth');

Route::get('users', function () {
    $user = \App\User::all();
    return view('users', compact('user'));
})->middleware('auth');

Route::get('/create_user', function () {
    return view('add_user');
})->middleware('auth');

Route::post('/add_user', 'AdminController@add_user')->middleware('auth');

Route::delete('delete_order/{id}', 'AdminController@destroy')->middleware('auth');


Route::get('edit_order/{id}', function ($id) {
    $order = \App\Order::find($id);
    return view('edit_order', compact('order'));
})->middleware('auth');

Route::post('edit_order/{id}', 'AdminController@update')->middleware('auth');

Route::delete('delete_user/{id}', 'AdminController@delete_user')->middleware('auth');


Route::get('edit_user/{id}', function ($id) {
    $user = \App\User::find($id);
    return view('edit_user', compact('user'));
})->middleware('auth');

Route::post('edit_user/{id}', 'AdminController@update_user')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('order_completed/{id}', 'AdminController@order_completed')->middleware('auth');