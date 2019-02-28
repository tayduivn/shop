<?php 

Route::group(['prefix'=>'slide'],function(){
	Route::get('/','SlideController@index');
	Route::get('edit/{id}','SlideController@getEdit');
	Route::post('edit/{id}','SlideController@postEdit');
	Route::get('add','SlideController@getAdd');
	Route::post('add','SlideController@postAdd');
	Route::get('delete/{id}','SlideController@getDelete');
	Route::post('delete_all','SlideController@postDeleteAll');
});

 ?>