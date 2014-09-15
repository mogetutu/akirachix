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
  return View::make('auth.signin');
});

// Authentication Routes
Route::resource('auth', 'AuthController');
Route::get('login', 'AuthController@index');
Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

// Todos Routes has filter in constructor
Route::resource('todos', 'TodosController');
