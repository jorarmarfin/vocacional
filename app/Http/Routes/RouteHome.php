<?php

Route::group(['middleware'=>'auth'], function() {

	Route::get('/', [
	 'uses' => 'HomeController@index',
	 'as' => 'home.index'
	]);

});