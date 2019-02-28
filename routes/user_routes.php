<?php 
Route::group(['prefix'=>'user'],function(){
		Route::get('/','UserController@index');
		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		Route::get('delete/{id}','UserController@getDelete');
		Route::post('delete_all','UserController@postDeleteAll');
	});

 ?>