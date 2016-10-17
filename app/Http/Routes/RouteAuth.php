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

// Registration routes...
Route::get('auth/register', [
	'uses'=>'Auth\AuthController@getRegister',
	'as'=>'auth.register'
	]);
Route::post('auth/register', [
	'uses'=>'Auth\AuthController@postRegister',
	'as'=>'auth.register'
	]);

// Password reset link request routes...
Route::get('password/email', [
	'uses'=>'Auth\PasswordController@getEmail',
	'as'=>'password.email'
	]);
Route::post('password/email', [
	'uses'=>'Auth\PasswordController@postEmail',
	'as'=>'password.email'
	]);

// Password reset routes...
Route::get('password/reset/{token}', [
	'uses'=>'Auth\PasswordController@getReset',
	'as'=>'password.reset'
	]);
Route::post('password/reset', [
	'uses'=>'Auth\PasswordController@postReset',
	'as'=>'password.reset'
	]);