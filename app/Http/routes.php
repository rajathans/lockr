<?php

//home page
Route::get('/home', 'FileEntryController@home');
Route::get('/','FileEntryController@home');
Route::get('/profile','PagesController@profile');
Route::get('/help','PagesController@help');
Route::get('/about', 'PagesController@about');
Route::get('/upload', 'PagesController@upload');

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

Route::get('fileentry/edit/{id}', [
	'as'  => 'editentry',
	'uses' => 'FileEntryController@edit'
	]);

// file sharing routes
Route::post('fileentry/share','FileEntryController@share');

Route::get('fileentry/remove/{id}', [
	'as' => 'removeentry',
	'uses' => 'FileEntryController@remove'
	]);

//authentication
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
