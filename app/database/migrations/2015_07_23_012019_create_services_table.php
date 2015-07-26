<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CreateServicesTable extends Migration {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments( 'id' );
			$table->string( 'service', 100 );
			$table->text( 'description' );
			$table->string( 'image', 300 );
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
		Schema::drop('services');
	}

}
