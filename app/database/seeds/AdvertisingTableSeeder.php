<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdvertisingTableSeeder extends Seeder {

	public function run()
	{
		Advertising::create([
			'name' => 'Instituto Jalisciense Mujer',
			'image' => 'img/resources/advertisings/right1.jpg',
			'link' => 'http://ijm.jalisco.gob.mx/',
			'position' => 'right',
			'order' => 1
		]);

		Advertising::create([
			'name' => 'Cancer de mama',
			'image' => 'img/resources/advertisings/left1.jpg',
			'link' => 'http://scontent-dfw1-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10986646_1141882282505277_7381944181653167584_n.jpg?oh=cb3cda22facdbd810584e88497e5e417&oe=564F27EB',
			'position' => 'left',
			'order' => 1
		]);
	}

}