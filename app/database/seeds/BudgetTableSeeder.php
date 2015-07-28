<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BudgetTableSeeder extends Seeder {

	public function run()
	{
		Budget::create([
			'name' => 'Revisión General',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate neque ac tortor pulvinar, in ullamcorper nunc elementum. Donec 
							  vestibulum pellentesque nunc sit amet ullamcorper. Praesent eleifend laoreet turpis, vel suscipit ante scelerisque ultrices. Nunc eu 
							  suscipit lorem, et tempor nunc. In a dictum nisi, at hendrerit nisi. Curabitur nibh enim, congue at magna eget, fringilla elementum nunc. 
							  Cras semper felis ac massa tempor, at laoreet diam volutpat. Ut non metus egestas, hendrerit ipsum at, iaculis sapien. Phasellus nisl mi, 
							  laoreet quis vulputate a, viverra eu ante. Fusce velit lectus, tincidunt id sem quis, consequat dignissim ante. Suspendisse feugiat lorem 
							  eu interdum accumsan. Donec condimentum ut lectus sed accumsan. Cras in velit a lectus maximus accumsan sed non leo. ',
		  	'image' => 'img/resources/budgets/budget1.jpg',
		  	'price' => 350,
		  	'order' => 1
		]);

		Budget::create([
			'name' => 'Curación',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate neque ac tortor pulvinar, in ullamcorper nunc elementum. Donec 
							  vestibulum pellentesque nunc sit amet ullamcorper. Praesent eleifend laoreet turpis, vel suscipit ante scelerisque ultrices. Nunc eu 
							  suscipit lorem, et tempor nunc. In a dictum nisi, at hendrerit nisi. Curabitur nibh enim, congue at magna eget, fringilla elementum nunc. 
							  Cras semper felis ac massa tempor, at laoreet diam volutpat. Ut non metus egestas, hendrerit ipsum at, iaculis sapien. Phasellus nisl mi, 
							  laoreet quis vulputate a, viverra eu ante. Fusce velit lectus, tincidunt id sem quis, consequat dignissim ante. Suspendisse feugiat lorem 
							  eu interdum accumsan. Donec condimentum ut lectus sed accumsan. Cras in velit a lectus maximus accumsan sed non leo. ',
		  	'image' => 'img/resources/budgets/budget1.jpg',
		  	'price' => 450,
		  	'order' => 2
		]);

		Budget::create([
			'name' => 'Análisis',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate neque ac tortor pulvinar, in ullamcorper nunc elementum. Donec 
							  vestibulum pellentesque nunc sit amet ullamcorper. Praesent eleifend laoreet turpis, vel suscipit ante scelerisque ultrices. Nunc eu 
							  suscipit lorem, et tempor nunc. In a dictum nisi, at hendrerit nisi. Curabitur nibh enim, congue at magna eget, fringilla elementum nunc. 
							  Cras semper felis ac massa tempor, at laoreet diam volutpat. Ut non metus egestas, hendrerit ipsum at, iaculis sapien. Phasellus nisl mi, 
							  laoreet quis vulputate a, viverra eu ante. Fusce velit lectus, tincidunt id sem quis, consequat dignissim ante. Suspendisse feugiat lorem 
							  eu interdum accumsan. Donec condimentum ut lectus sed accumsan. Cras in velit a lectus maximus accumsan sed non leo. ',
		  	'image' => 'img/resources/budgets/budget1.jpg',
		  	'price' => 550,
		  	'order' => 3
		]);
	}

}