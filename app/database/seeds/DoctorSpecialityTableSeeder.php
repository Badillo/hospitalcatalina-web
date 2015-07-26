<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DoctorSpecialityTableSeeder extends Seeder {

	public function run()
	{
		DoctorSpeciality::create([
			'doctor_id' => 1,
			'speciality_id' => 2
		]);

		DoctorSpeciality::create([
			'doctor_id' => 2,
			'speciality_id' => 3
		]);

		DoctorSpeciality::create([
			'doctor_id' => 3,
			'speciality_id' => 4
		]);

		DoctorSpeciality::create([
			'doctor_id' => 4,
			'speciality_id' => 4
		]);

		DoctorSpeciality::create([
			'doctor_id' => 5,
			'speciality_id' => 4
		]);

		DoctorSpeciality::create([
			'doctor_id' => 5,
			'speciality_id' => 5
		]);
	}

}