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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->nullable();
			$table->string('password');
			$table->increments('activited');
			$table->string('actioncode');
			$table->text('permissions');
			$table->timestamps('activited_at');
			$table->timestamps('last_login');
			$table->string('persist_code');
			$table->string('reset_password_code');
			$table->string('first_name');
			$table->string('last_name');
			$table->timestamps('create_at');
			$table->timestamps('update_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
