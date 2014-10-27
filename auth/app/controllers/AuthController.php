<?php

class AuthController extends \BaseController {

    /**
     * Loads Sign Up Page
     * @return void
     */
	public function signUpPage()
    {
        return View::make('auth.signup');
    }

    /**
     * Sign Up Process here
     * @return void
     */
    public function signup()
    {
        // Rules
        $rules = [
            'username' => 'required|unique:users,username',
            'password' => 'required'
        ];
        // Input
        $input = Input::only('username', 'password');
        // Validation
        $Validation = Validator::make($input, $rules);

        if($Validation->passes())
        {
            // Hash Password
            $data = [
                'username' => $input['username'],
                'password' => Hash::make($input['password']),
            ];
            // Create User
            $user = User::create($data);
            // Redirect User
            if($user) return Redirect::to('login')
                ->with('message', 'Hooray, Account Created!');
        }

        return Redirect::back()->withErrors($Validation)->withInput();
    }

    public function loginPage()
    {
        return View::make('auth.login');
    }

    public function login()
    {
        $credentials = Input::only(['username', 'password']);

        if(Auth::attempt($credentials))
        {
            $username = Auth::user()->username;

            return Redirect::to('profile')->with('message', "Welcome $username");
        }

        return Redirect::back()->with('message', 'Check Credentials');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('login');
    }


}
