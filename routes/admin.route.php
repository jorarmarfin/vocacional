<?php
Route::group(['prefix' => 'otro','middleware'=>'auth','namespace'=>'Admin'], function() {
	Route::resource('users', 'UsersController',['names'=>'admin.users']);
});


