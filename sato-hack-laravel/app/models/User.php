<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $dates = ['deleted_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden  = array('password', 'remember_token');

	// Allow for mass assignment
	protected $guarded = array('password', 'remember_token');

	// Validation rules here
	public static $rules = array(
		'names'          => 'required',
		'phone'          => 'required|numeric|min:9|unique:users',
		'marital_status' => 'required',
		'gender'         => 'required',
	);

	// Update rules
	public static $updateRules = array(
		'names'          => 'required',
		'phone'          => 'required|numeric|min:9',
		'marital_status' => 'required',
		'gender'         => 'required',
	);

	// Sign Up Rules
	public static $signUpRules = array(
		'username' => 'required|unique:users,username',
		'password' => 'required|min:6',
	);
}
