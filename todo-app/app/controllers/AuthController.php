<?php

class AuthController extends \BaseController {

	/**
	 * Load Sign In Page
	 * @return View
	 */
	public function index()
	{
		return View::make('auth.signin');
	}


	/**
	 * Load Sign Up Page
	 * @return View
	 */
	public function create()
	{
		return View::make('auth.signup');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
    $data = Input::all();
    $validation = Validator::make($data, User::$signUpRules);
    if($validation->passes())
    {
  		$user = new User;
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      return Redirect::to('auth.login')
                      ->with('message', 'Account Created, Please login');
    }
    return Redirect::back()->withErrors($validation)->withInput();
	}

  public function login()
  {
    $credentials = [
      'username' => Input::get('username'),
      'password' => Input::get('password')
    ];

    if(Auth::attempt($credentials)) return Redirect::to('todos');

    return Redirect::back()->withInput()->with('message', 'Check Username and Password');
  }

  public function logout()
  {
    Auth::logout();
    return Redirect::to('auth');
  }
}
