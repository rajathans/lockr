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
Route::get('file', 'FileEntryController@index');
Route::get('file/get/{filename}', [
	'as' => 'getentry', 'uses' => 
	'FileEntryController@get'
]);
Route::post('file/add',[ 
        'as' => 'addentry', 
        'uses' => 'FileEntryController@add'
]);

/*Notices
Route::resource('notices','NoticesController');*/

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
