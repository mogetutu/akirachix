<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(5);

		return View::make('posts.index', compact('posts'));
	}

	public function search()
	{
		$search = Input::get('search');
		$posts = Post::where('title', 'LIKE', "%$search%")->paginate(5);

		return View::make('posts.index', compact('posts'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Blog post data
		$data = [
			'title' => Input::get('title'),
			'text'  => Input::get('text'),
			'slug'  => Post::slugify(Input::get('title'))
		];

		$rules = [
			'title' => 'required',
			'text' => 'required'
		];
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			// new Instance of Post Model
			$post = new Post($data);
			$user = Auth::user(); // User in session
			// Create related post model
			$createdpost = $user->posts()->save($post);

			return Redirect::route('posts.index');
		}

		return Redirect::back()->withErrors($validation)->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::where('slug', $id)->first();

		return View::make('posts.show', compact('post'));
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
		//
	}


}
