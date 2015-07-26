<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CreateDoctorsTable extends Migration {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function(Blueprint $table)
		{
			$table->increments( 'id' );
			$table->string( 'name', 100 );
			$table->string( 'phone', 20 );
			$table->string( 'email', 50 );
			$table->string( 'picture', 100 );
			$table->string( 'website', 300 );
			$table->text( 'comment' );
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
		Schema::drop('doctors');
	}

}

