<?php

class TodosController extends \BaseController {

	public function __construct()
	{
		// Filter users who are not signed in
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todos = Auth::user()->todos;
		return View::make('todos.index', compact('todos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$todo = new Todo(['task' => Input::get('task')]);
		$createdTodo = Auth::user()->todos()->save($todo);
		if($createdTodo) return Redirect::back()->with('message', 'Todo Added.');
		return Redirect::back()->with('message', 'Problem adding todo.');
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
		$todo = Todo::find($id);
		if($todo->user == Auth::user())
		{
			Todo::destroy($id);
			return Redirect::back()->with('message', 'Todo Delete');
		}
		return Redirect::back()->with('message', 'Todo not found.');
	}


}
