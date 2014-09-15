<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersForeignKeyToTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('todos', function($table){
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users'); //Adds refential integrity
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropForeign('todos_user_id_foreign');
	}

}
