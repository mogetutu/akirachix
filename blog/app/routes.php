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
  $firstname = 'isaak';
  $lastname = 'mogetutu';
  $nickname = 'tutu';
  $filename = "{$firstname}{$lastname}.pdf";
  return $filename;
});

Route::get('login', function()
{
	return View::make('auth.login');
});

// Authentication Routes
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@signupPage');
Route::post('signup', 'AuthController@signup');
Route::get('logout', 'AuthController@logout');

// Blog Routes
Route::get('posts/search', ['as' => 'posts.search', 'uses' => 'PostController@search']);
Route::resource('posts', 'PostController');
