<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('products',function(Blueprint $table)
		{
			$table->increments('p_id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('part_number');
			$table->string('supplier');
			$table->string('grade');
			$table->string('shape');
			$table->integer('radius');
			$table->integer('length');
			$table->integer('breadth');
			$table->integer('thickness');
			$table->integer('weight');
			$table->string('images');
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
		//
		Schema::drop('products');
	}

}
