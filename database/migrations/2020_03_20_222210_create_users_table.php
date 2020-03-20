<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('id');
			$table->string('name', 100);
			$table->string('username', 100)->nullable();
			$table->string('password', 100);
			$table->string('email', 100);
			$table->string('rdate', 20)->nullable();
			$table->string('ldate', 20)->nullable();
			$table->string('mobile', 100)->nullable();
			$table->integer('gender_id')->nullable();
			$table->integer('discount_id')->nullable();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
