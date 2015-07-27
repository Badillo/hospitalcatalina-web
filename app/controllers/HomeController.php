<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function initialLoad()
	{
		$advertisings = Advertising::orderBy('order', 'asc')->get();
		$budgets = Budget::orderBy('order', 'asc')->get();
		$doctors = Doctor::with('speciality')->get();
		$nav_menus = NavigationMenu::orderBy('order', 'asc')->get();
		$promos = Promo::all();
		$services = Service::orderBy('order', 'asc')->get();
		$slider_images = SliderImage::all();
		$specialities = Speciality::all();
		
		return View::make('layouts.main', array( 'advertisings' => $advertisings,
												 'budgets' => $budgets,
												 'doctors' => $doctors,
												 'nav_menus' => $nav_menus,
												 'promos' => $promos,
												 'services' => $services,
												 'slider_images' => $slider_images,
												 'specialities' => $specialities, ) );
	}

	public function get_doctors()
	{
		$doctors = Doctor::with('speciality')->get();
		
		return Response::json( array( 'doctors' => $doctors) );
	}

}
