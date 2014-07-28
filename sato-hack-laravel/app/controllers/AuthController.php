<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('auth.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate for username:unique,users:username and password
		$validation  = Validator::make($data = Input::all(), User::$signUpRules);

		if($validation->fails()) {
			return Redirect::route('auth.create')->withErrors($validation)->withInput();
		}

		// Create user
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password')); // Remember to Hash the password
		$user->save();

		// Login user
		if(Auth::attempt(Input::only(['username', 'password']))) {
			return Redirect::route('users.edit', [$user->id]);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Logout user
		Auth::logout();

		// Redirect user to login page
		return Redirect::route('auth.index');
	}


}
