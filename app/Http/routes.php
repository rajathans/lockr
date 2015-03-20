<?php

//home page
Route::get('/home', 'FileEntryController@index');
Route::get('/','WelcomeController@welcome');
Route::get('/profile','PagesController@profile');
Route::get('/help','PagesController@help');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/about', 'PagesController@about');
Route::get('/fileentry', 'FileEntryController@index');
Route::get('/fileentry/get/{filename}', [
'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[
        'as' => 'addentry', 'uses' => 'FileEntryController@add']);

/*Notices
Route::resource('notices','NoticesController');*/

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
