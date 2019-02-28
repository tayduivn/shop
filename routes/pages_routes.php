<?php 
Route::get('home','PagesController@home');
Route::get('intro','PagesController@intro');
Route::get('post/{id}/{slug}','PagesController@getpost');
Route::get('contact','PagesController@getcontact');
Route::post('contact','PagesController@postcontact');
Route::get('category/{id}/{slug}','PagesController@category');
Route::get('product/{id}/{slug}','PagesController@product');


Route::get('loginuser','PagesController@getLoginUser');
Route::post('loginuser','PagesController@postLoginUser');
Route::get('logoutuser','PagesController@getLogoutUser');

Route::get('frontuser','PagesController@getFrontUser');
Route::post('frontuser','PagesController@postFrontUser');

Route::get('register','PagesController@getRegister');
Route::post('register','PagesController@postRegister');

Route::post('usercomment/{id}','CommentController@postUserComment');

Route::get('search{page?}','PagesController@search');

 ?>