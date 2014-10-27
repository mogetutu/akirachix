<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::user()->profile)
        {
            $profiles = Profile::paginate(5);
            return View::make('profiles.index', compact('profiles'));
        }
        return Redirect::route('profile.create');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//rules
        $rules = [
            'firstname' => 'required',
            'lastname'  => 'required',
            'phone'     => 'required|integer|unique:profiles,phone',
        ];
        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if($validation->passes())
        {
            $profile = new Profile($input);
            $user = Auth::user();
            $savedProfile = $user->profile()->save($profile);
            dd($savedProfile);
        }

        return Redirect::back()->withInput()->withErrors($validation);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $profile = Auth::user()->profile;
		return View::make('profiles.show', compact('profile'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $profile = Profile::find($id);

		return View::make('profiles.edit', compact('profile'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//rules
        $rules = [
            'firstname' => 'required',
            'lastname'  => 'required',
            'phone'     => 'required|integer|unique:profiles,phone,'.$id,
        ];
        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if($validation->passes())
        {
            $profile = Profile::find($id);
            $profile->update($input);
            return Redirect::route('profile.show', $id)->with('message', 'Profile Updated.');
        }

        return Redirect::back()->withInput()->withErrors($validation);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
