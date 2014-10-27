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
	return View::make('hello');
});

// Route for sign up page
Route::get('signup', 'AuthController@signUpPage');
Route::post('signup', 'AuthController@signup');

// Route for login page
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');

Route::get('logout', 'AuthController@logout');

Route::resource('profile', 'ProfilesController');

