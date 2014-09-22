<?php

class AuthController extends \BaseController {

	// SignUp Screen
	public function signUp()
	{
		return View::make('auth.signup');
	}

	public function signIn()
	{
		return View::make('auth.signin');
	}

	public function login()
	{
		$rules = [
			'username' => 'required|exists:users,username',
			'password' => 'required'
		];
		$data = Input::only(['username', 'password']);
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			// Create session
			if(Auth::attempt($data))
			{
				return Redirect::route('todos.index');
			}

			return Redirect::back()->with('message', 'Check Username and Password.');
		}

		return Redirect::back()->withErrors($validation);
	}

	// Account Creation
	public function createAccount()
	{
		$rules = [
			'username' => 'required|unique:users,username',
			'password' => 'required|min:5'
		];
		$data = Input::only(['username', 'password']);
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			// Login User after creating account
			Auth::login($user);

			return Redirect::route('todos.index');
		}

		return Redirect::back()->withErrors($validation)->withInput();
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('signin');
	}
}
