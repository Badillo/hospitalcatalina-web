<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'Administrator',
			'username' => 'admin',
			'password' => Hash::make('admin')
		]);
	}

}