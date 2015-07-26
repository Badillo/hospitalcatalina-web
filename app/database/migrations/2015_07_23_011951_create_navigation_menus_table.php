<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CreateNavigationMenusTable extends Migration {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
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
			$table->text( 'text' );
			$table->string( 'link', 300 );
			$table->string( 'image_link', 300 );
			$table->integer( 'order', false );
			$table->timestamps();
			$table->softDeletes();
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
