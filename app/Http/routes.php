<?php

//home page
Route::get('/home', 'PagesController@home');
Route::get('/','WelcomeController@welcome');
Route::get('/profile','PagesController@profile');
Route::get('/help','PagesController@help');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/about', 'PagesController@about');
Route::get('/upload', 'FilesController@upload');
Route::get('/download', 'FilesController@download');

/*Notices
Route::resource('notices','NoticesController');*/

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
