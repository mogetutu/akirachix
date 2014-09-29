<?php

/**
* Authentication Controller
*/
class AuthController extends BaseController
{
  public function login()
  {
    $credentials = [
      'username' => Input::get('username'),
      'password' => Input::get('password'),
    ];

    if(Auth::attempt($credentials))
    {
      return Redirect::route('posts.index');
    }

    return Redirect::back()->with('message', 'Check Username and Password');
  }

  public function signup()
  {
    $data = [
      'username' => Input::get('username'),
      'password' => Input::get('password')
    ];
    $rules = [
      'username' => 'required|unique:users,username',
      'password' => 'required'
    ];

    $validation = Validator::make($data, $rules);
    if($validation->passes())
    {
      // Create User account
      $user = new User;
      $user->username = $data['username'];
      $user->password = Hash::make($data['password']);
      $user->save();

      // Login User
      Auth::login($user);

      return Redirect::route('posts.index');
    }
  }

  public function loginPage()
  {
    return View::make('auth.login');
  }

  public function signupPage()
  {
    return View::make('auth.signup');
  }

  public function logout()
  {
    Auth::logout();

    return Redirect::route('posts.index');
  }
}
