<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.master');
});

Route::resource('auth', 'AuthController');
Route::get('/users/females', 'UsersController@allFemales');
Route::get('/users/search',
  array('as' => 'users.search', 'uses' => 'UsersController@search'));
Route::resource('users', 'UsersController');
