<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdvertisingTableSeeder extends Seeder {

	public function run()
	{
		Advertising::create([
			'name' => 'Instituto Jalisciense Mujer',
			'image' => 'img/advertisings/right1.jpg',
			'position' => 'right',
			'order' => 1
		]);

		Advertising::create([
			'name' => 'Cancer de mama',
			'image' => 'img/advertisings/left1.jpg',
			'position' => 'left',
			'order' => 1
		]);
	}

}