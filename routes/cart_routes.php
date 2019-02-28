<?php 

Route::get('shopping/{id}/{slug}','CartController@shopping');
Route::get('cart','CartController@cart');
Route::get('cart_remove/{id}','CartController@cartRemove');
Route::get('cart_update','CartController@cartUpdate');

Route::get('order_check','CartController@getOrderCheck');
Route::post('order_check','CartController@postOrderCheck');
Route::get('order_history','CartController@getOrderHistory');
Route::get('orderhis_detail/{id}','CartController@getOrderHisDetail');

 ?>