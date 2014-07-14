<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
	    $table->increments('id');
	    $table->string('names');
	    $table->date('dob');
	    $table->string('gender')->default('Female')->nullable();
	    $table->string('marital_status');
	    $table->string('photo')->nullable();
	    $table->string('country')->default('Kenya')->nullable();
	    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
