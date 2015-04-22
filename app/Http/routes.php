<?php

//home page
Route::get('/home', 'FileEntryController@index');
Route::get('/','WelcomeController@welcome');
Route::get('/profile','PagesController@profile');
Route::get('/help','PagesController@help');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/about', 'PagesController@about');
Route::get('/upload', 'PagesController@upload');
//Route::get('/donate', 'PagesController@donate');

/*File handling and related routes*/

Route::get('fileentry/get/{filename}', [
	'as' => 'getentry', 
	'uses' => 'FileEntryController@get'
	]);
Route::post('fileentry/add',[
	'as' => 'addentry', 
    'uses' => 'FileEntryController@add'
    ]);

Route::get('fileentry/delete/{id}', [
	'as' => 'deleteentry',
	'uses' => 'FileEntryController@delete'
	]);

Route::get('fileentry/search/results', [
	'as' => 'searchentry', 
	'uses' => 'FileEntryController@search'
	]);

/*Notices
Route::resource('notices','NoticesController');*/

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
