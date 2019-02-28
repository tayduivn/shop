<?php 
Route::group(['prefix'=>'category'],function(){
		Route::get('/','CategoryController@index');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');
		Route::get('delete/{id}','CategoryController@getDelete');
		Route::post('delete_all','CategoryController@postDeleteAll');
	});

 ?>