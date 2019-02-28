<?php 

Route::group(['prefix'=>'post'],function(){
	Route::get('/','PostController@index');
	Route::get('edit/{id}','PostController@getEdit');
	Route::post('edit/{id}','PostController@postEdit');
	Route::get('add','PostController@getAdd');
	Route::post('add','PostController@postAdd');
	Route::get('delete/{id}','PostController@getDelete');
	Route::post('delete_all','PostController@postDeleteAll');
});

 ?>