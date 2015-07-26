<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SliderImageTableSeeder extends Seeder {

	public function run()
	{
		SliderImage::create([
			'link' => 'img/resources/slider/slide1.jpg',
			'description' => 'Some description'
		]);

		SliderImage::create([
			'link' => 'img/resources/slider/slide2.jpg',
			'description' => 'Some description 2'
		]);

		SliderImage::create([
			'link' => 'img/resources/slider/slide3.jpg',
			'description' => 'Some description 3'
		]);
	}

}