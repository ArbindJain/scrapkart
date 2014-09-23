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
			$table->double('size_a',10,3)->nullable();
			$table->double('size_b',10,3)->nullable();
			$table->double('size_c',10,3)->nullable();
			$table->double('thickness',10,3);
			$table->double('volume',10,3);
			$table->string('bynumber');
			$table->string('perday');
			$table->string('images');
			$table->string('files')->nullable();
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
