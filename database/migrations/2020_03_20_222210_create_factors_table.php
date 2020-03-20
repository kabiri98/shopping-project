<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factors', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('fdate', 13);
			$table->integer('user_id');
			$table->integer('sum');
			$table->integer('delivery_type_id');
			$table->integer('peyment_type_id');
			$table->integer('discount_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('factors');
	}

}
