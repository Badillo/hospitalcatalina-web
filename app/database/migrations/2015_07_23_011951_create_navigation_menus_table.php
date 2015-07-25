<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavigationMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigation_menus', function(Blueprint $table)
		{
			$table->increments( 'id' );
			$table->string( 'menu', 50 );
			$table->string( 'title', 100 );
			$table->string( 'text', 300 );
			$table->string( 'link', 150 );
			$table->string( 'image_link', 150 );
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
		Schema::drop('navigation_menus');
	}

}
