<?php

//home page
Route::get('/home', 'PagesController@home');
Route::get('/','WelcomeController@welcome');
Route::get('/profile','PagesController@profile');
Route::get('/help','PagesController@help');

//Notices
Route::resource('notices','NoticesController');

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
