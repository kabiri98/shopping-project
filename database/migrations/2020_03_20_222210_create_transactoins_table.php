<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactoinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactoins', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('factor_id');
			$table->date('tdate');
			$table->char('transstatus', 1);
			$table->integer('shipping_id');
			$table->integer('verification_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactoins');
	}

}
