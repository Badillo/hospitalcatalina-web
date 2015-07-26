<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AdvertisingTableSeeder');
		$this->call('BudgetTableSeeder');
		$this->call('DoctorSpecialityTableSeeder');
		$this->call('DoctorTableSeeder');
		$this->call('EmailTableSeeder');
		$this->call('NavigationMenuTableSeeder');
		$this->call('PromoTableSeeder');
		$this->call('ServiceTableSeeder');
		$this->call('SliderImageTableSeeder');
		$this->call('SpecialityTableSeeder');
		$this->call('UserTableSeeder');
	}

}
