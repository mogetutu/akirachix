<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Push all tables:users records from database
		// SQL SELECT * FROM `users`
		$users = User::all();
		return View::make('users.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$marital_status = array('Single', 'Divorced', 'Engaged', 'Complicated', 'Married');
		return View::make('users.create', compact('marital_status'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Format the date of birth to 'Y-m-d'
		$dob        = Input::get('dob'); // returns and array
		$datestring = $dob['year'] .'-'. $dob['month'] .'-'. $dob['day'];

		// Merge new date string back to Input
		Input::merge(['dob' => $datestring]);

		// Capture Form Data
		$payload    = Input::except('_token');
		// Validate data and return errors if any
		$validation = Validator::make($payload, User::$rules);

		if($validation->passes())
		{
			// Save data to database
			$user = User::create($payload);
			// Redirect user to profile page
			if ($user) {
				return Redirect::route('users.show', array($user->id));
			}
		}
		else
		{
			// Redirect the user back to the form and show them the errors made
			return Redirect::back()->withErrors($validation);
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
		// Picking the user with set $id
		// SQL: SELECT * FROM `users` WHERE `id` = $id
		$user = User::find($id);

		return View::make('users.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Fetch Record
		$user = User::find($id);
		$marital_status = array('Single', 'Divorced', 'Engaged', 'Complicated', 'Married');

		return View::make('users.edit', compact('user', 'marital_status'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Format the date of birth to 'Y-m-d'
		$dob        = Input::get('dob'); // returns and array
		$datestring = $dob['year'] .'-'. $dob['month'] .'-'. $dob['day'];

		// Merge new date string back to Input
		Input::merge(array('dob' => $datestring));

		// Capture Form Data
		$payload    = Input::except('_token');
		// Validate data and return errors if any
		$validation = Validator::make($payload, User::$updateRules);

		if($validation->passes())
		{
			// Save data to database
			// SQL UPDATE `users` SET (values) WHERE `id` = $id
			$user = User::find($id);
			$user->update($payload);
			// Redirect user to profile page
			if ($user) {
				return Redirect::route('users.show', array($user->id))->with('alert', 'Record Updated.');
			}
		}
		else
		{
			// Redirect the user back to the form and show them the errors made
			return Redirect::back()->withErrors($validation);
		}
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
