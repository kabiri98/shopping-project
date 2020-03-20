<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('baskets', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('user_id');
			$table->integer('product_id');
			$table->integer('number');
			$table->string('deadline', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('baskets');
	}

}
