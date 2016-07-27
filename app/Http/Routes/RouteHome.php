<?php

Route::group(['middleware'=>'auth'], function() {
	Route::resource('home','HomeController');
});