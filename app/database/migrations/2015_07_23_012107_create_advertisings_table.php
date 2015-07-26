<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisings', function(Blueprint $table)
		{
			$table->increments( 'id' );
			$table->string( 'name', 100 );
			$table->string( 'image', 300 );
			$table->string( 'link', 300 );
			$table->string( 'position', 10 );
			$table->integer( 'order', false );
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
		Schema::drop('advertisings');
	}

}
