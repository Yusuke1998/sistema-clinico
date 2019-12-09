<?php

Auth::routes();

Route::get('/', 'HomeController@website')
	->name('website');

Route::get('/dashboard', 'HomeController@dashboard')
	->name('dashboard')
	->middleware('auth');

// DATA
Route::get('/get-documents', 'DocumentController@getAll');
// FIN DATA

// USUARIOS
Route::get('/usuarios', 'UsersController@index')
	->name('users.index')
	->middleware('auth');
Route::post('/get-users','UsersController@userDataTable');
Route::post('/store-user','UsersController@store');
Route::post('/update-user','UsersController@update');
Route::post('/delete-user','UsersController@destroy');
Route::get('/profile-user/{username?}','UsersController@profile')->name('profile');
// FIN USUARIOS