<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NavigationMenuTableSeeder extends Seeder {

	public function run()
	{

		NavigationMenu::create([
			'menu' => 'Clínica de Cancer',
			'title' => 'CLÍNICA DE CÁNCER',
			'text' => 'En Jalisco (INEGI 2011) el cáncer en las mujeres, 15.5% de las defunciones por tumores malignos corresponden al cáncer de mama y 9.6% al de cuello del útero (cérvico-uterino).
			\nTres municipios representan 50% del total de fallecimientos causados por tumores de tipo maligno; Guadalajara (29.7%), Zapopan (14.5%) y Tlaquepaque (5.8 por ciento).\nDe aquí la gran 
			necesidad de contar con una clínica de Alta especialidad para la atención de pacientes con Cáncer de mama y Cérvico uterino, como una prioridad hacia la atención de la mujer, 
			aunque gradualmente serán atendidos otros tipos de cáncer.\nEstamos en una ubicación estratégica de la ciudad de Guadalajara con gran influencia en la zona, se ahí la importancia de contar 
			con un hospital que cuide tu salud y proteja tu economía, y que ofrece de manera oportuna, eficaz y eficiente servicios, con un staff médico de reconocido prestigio, con la innovación 
			de ofrecer servicios integrales en donde un equipo multidisciplinario logra una atención diferenciada para cada paciente, ya que está enfermedad requiere ser entendida en todas sus 
			dimensiones, pero sobre todo es necesario saber que si esta enfermedad se detecta a tiempo es curable.\nPregunte por nuestros paquetes preferentes de detección oportuna “Porque me quiero 
			me cuido”',
			'link' => 'http://www.mayoclinic.org/cancer-de-mama/diagnostico.html',
			'image_link' => 'img/logos/main_logo.jpg',
			'order' => 1
		]);

		NavigationMenu::create([
			'menu' => 'Cardiologia',
			'title' => '',
			'text' => '',
			'link' => '',
			'image_link' => '',
			'order' => 2
		]);

		NavigationMenu::create([
			'menu' => 'Rehabilitación',
			'title' => '',
			'text' => '',
			'link' => '',
			'image_link' => '',
			'order' => 3
		]);

		NavigationMenu::create([
			'menu' => 'Hombro y Codo',
			'title' => '',
			'text' => '',
			'link' => '',
			'image_link' => '',
			'order' => 4
		]);

		NavigationMenu::create([
			'menu' => 'Ginecologia',
			'title' => '',
			'text' => '',
			'link' => '',
			'image_link' => '',
			'order' => 5
		]);
	}

}