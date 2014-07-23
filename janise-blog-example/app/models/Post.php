<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
    'title' => 'required|unique:posts,title',
    'body'  => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'body'];

}
