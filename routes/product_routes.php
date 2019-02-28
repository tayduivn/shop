<?php 
Route::group(['prefix'=>'product'],function(){
		Route::get('/','ProductController@index');
		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');
		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');
		Route::get('delete/{id}','ProductController@getDelete');
		Route::post('delete_all','ProductController@postDeleteAll');

		Route::get('delete_images/{id}','ProductController@getDeleteImages');

		Route::get('attribute','ProductController@attributeList');
		Route::get('attribute_add','ProductController@attributegetAdd');
		Route::post('attribute_add','ProductController@attributepostAdd');
		Route::get('attribute_edit/{id}','ProductController@attributegetEdit');
		Route::post('attribute_edit/{id}','ProductController@attributepostEdit');
		Route::get('attribute_delete/{id}','ProductController@attributeDelete');
		Route::post('attribute_delete_all','ProductController@attributeDeleteAll');
	});

	Route::group(['prefix'=>'comment'],function(){
		Route::get('/','CommentController@index');
		Route::get('delete/{id}','CommentController@CommentDelete');
		Route::post('delete_all','CommentController@CommentDeleteAll');
		
		Route::get('delete/{id}/{product_id}','CommentController@getDelete');
		Route::post('delete_all/{product_id}','CommentController@postDeleteAll');
	});
 ?>


		