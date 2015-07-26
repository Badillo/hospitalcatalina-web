<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DoctorTableSeeder extends Seeder {

	public function run()
	{
		Doctor::create([
			'name' => 'Rodolfo A. Aldana Camacho',
			'phone' => '',
			'email' => '',
			'picture' => 'img/doctorPhotos/defaultPhoto.jpg',
			'website' => '',
			'comment' => ''
		]);

		Doctor::create([
			'name' => 'Benjamin San Ibarra',
			'phone' => '',
			'email' => '',
			'picture' => 'img/doctorPhotos/defaultPhoto.jpg',
			'website' => '',
			'comment' => ''
		]);

		Doctor::create([
			'name' => 'J. Abraham Flores Cardoza',
			'phone' => '',
			'email' => '',
			'picture' => 'img/doctorPhotos/defaultPhoto.jpg',
			'website' => '',
			'comment' => ''
		]);

		Doctor::create([
			'name' => 'Jaime F. Hernandez Zuñiga',
			'phone' => '',
			'email' => '',
			'picture' => 'img/doctorPhotos/defaultPhoto.jpg',
			'website' => '',
			'comment' => ''
		]);

		Doctor::create([
			'name' => 'Monica Cuadras',
			'phone' => '',
			'email' => '',
			'picture' => 'img/doctorPhotos/defaultPhoto.jpg',
			'website' => '',
			'comment' => ''
		]);
	}

}