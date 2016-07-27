<?php
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', [
	 'uses' => 'Auth\AuthController@postLogin',
	 'as' => 'auth.login'
	]);

Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', [
	 'uses' => 'Auth\AuthController@getLogout',
	 'as' => 'auth.logout'
	]);

