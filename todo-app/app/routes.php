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
	return View::make('master');
});

// SignUp View
Route::get('signup', ['as' => 'signup', 'uses'=> 'AuthController@signUp']);
// Create Account Route
Route::post('account', ['as' => 'account', 'uses' => 'AuthController@createAccount']);
// Sign In Route
Route::get('signin', ['as' => 'signin', 'uses'=> 'AuthController@signIn']);
// Login Route
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

// Todos Routes
Route::get('todos/search', 'TodosController@search');
Route::resource('todos', 'TodosController');
