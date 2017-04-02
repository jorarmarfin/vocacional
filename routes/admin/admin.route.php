<?php

Route::resource('users', 'UsersController',['names'=>'admin.users']);


/**
 * Postulantes
 */
Route::group(['namespace'=>'Postulantes'], function() {
	#Route::get('postulantes','PostulantesController@index')->name('admin.pos.index');
	#Route::get('postulantes-lista','PostulantesController@lista')->name('admin.pos.list');
});