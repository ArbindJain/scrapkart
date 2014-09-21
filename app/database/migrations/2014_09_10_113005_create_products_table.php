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
			$table->string('metal');
			$table->string('supplier');
			$table->string('grade_a');
			$table->string('grade_b');
			$table->string('shape');
			$table->integer('size_a')->nullable();
			$table->integer('size_b')->nullable();
			$table->integer('size_c')->nullable();
			$table->integer('thickness');
			$table->integer('volume');
			$table->string('bynumber');
			$table->string('perday');
			$table->string('images');
			$table->string('city');
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
