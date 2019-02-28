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
    return view('welcome');
});

Route::get('admin/login','UserController@getloginAdmin');
Route::post('admin/login','UserController@postloginAdmin');
Route::get('admin/logout','UserController@getlogoutAdmin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::get('/','AdminController@index')->name('admin');

	require 'category_routes.php';
	require 'product_routes.php';
	require 'slide_routes.php';
	require 'user_routes.php';
	require 'post_routes.php';

	Route::get('orders','OrdersController@getOrders');
	Route::get('order_detail/{id}','OrdersController@getOrderDetail');
	Route::get('orders_delete/{id}','OrdersController@getOrdersDelete');
	Route::post('orders_status/{id}','OrdersController@getOrdersStatus');

});

require 'pages_routes.php';
require 'cart_routes.php';


