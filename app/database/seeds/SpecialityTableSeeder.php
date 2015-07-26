<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SpecialityTableSeeder extends Seeder {

	public function run()
	{
		Speciality::create([
			'name' => 'Angiologia'
		]);

		Speciality::create([
			'name' => 'Cardiologia'
		]);

		Speciality::create([
			'name' => 'Cirugia Cardiovascular'
		]);

		Speciality::create([
			'name' => 'Cirugia General'
		]);

		Speciality::create([
			'name' => 'Cirugia Oncologia'
		]);

		Speciality::create([
			'name' => 'Cirugia Pediatrica'
		]);

		Speciality::create([
			'name' => 'Cirugia Plastica'
		]);

		Speciality::create([
			'name' => 'Dermatologia'
		]);

		Speciality::create([
			'name' => 'Gastroenterologia'
		]);

		Speciality::create([
			'name' => 'Gineco-obstericia'
		]);

		Speciality::create([
			'name' => 'Infectologia'
		]);

		Speciality::create([
			'name' => 'Infecto Pediatria'
		]);

		Speciality::create([
			'name' => 'Medicina Critica'
		]);

		Speciality::create([
			'name' => 'Medicina Interna'
		]);

		Speciality::create([
			'name' => 'Nefrologia'
		]);

		Speciality::create([
			'name' => 'Neumologia'
		]);

		Speciality::create([
			'name' => 'Neurocirugia'
		]);

		Speciality::create([
			'name' => 'Neurologia'
		]);

		Speciality::create([
			'name' => 'Oftalmologia'
		]);

		Speciality::create([
			'name' => 'Otorrinolaringologia'
		]);

		Speciality::create([
			'name' => 'Pediatria'
		]);

		Speciality::create([
			'name' => 'Proctologia'
		]);

		Speciality::create([
			'name' => 'Reumatologia'
		]);

		Speciality::create([
			'name' => 'Traumatologia'
		]);

		Speciality::create([
			'name' => 'Urologia'
		]);
	}

}