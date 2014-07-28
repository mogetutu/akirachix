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
	    $table->string('names')->nullable();
	    $table->date('dob')->default('1970-01-01');
	    $table->string('gender')->default('Female')->nullable();
	    $table->string('marital_status')->default(0);
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
