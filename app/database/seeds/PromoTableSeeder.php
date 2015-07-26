<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PromoTableSeeder extends Seeder {

	public function run()
	{
		Promo::create([
			'link' => 'img/resources/promos/promo1.png',
			'description' => '',
			'speciality_id' => '5'
		]);

		Promo::create([
			'link' => 'img/resources/promos/promo2.png',
			'description' => '',
			'speciality_id' => '5'
		]);

		Promo::create([
			'link' => 'img/resources/promos/promo3.png',
			'description' => '',
			'speciality_id' => '24'
		]);

		Promo::create([
			'link' => 'img/resources/promos/promo4.png',
			'description' => '',
			'speciality_id' => '2'
		]);
	}

}
