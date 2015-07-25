<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ServiceTableSeeder extends Seeder {

	public function run()
	{
		Service::create([
			'service' => 'Urgencias y Sala de Shock',
			'description' => 'El servicio de urgencias del hospital cuenta con un área de revisión, choque y procedimientos diversos entre las cuales engloba el manejo de primer contacto del paciente que busca atención prioritaria. Se mantiene con equipo adecuado y personal médico disponible las 24 horas para proporcionar la ayuda indispensable en una situación de emergencia.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 1
		]);

		Service::create([
			'service' => 'Quirófanos',
			'description' => '4 Quirófanos que cuentan con equipo innovador que ofrece seguridad a los pacientes que requieren de una cirugía urgente o electiva, que junto con el personal médico y de enfermería buscan recuperar la salud de los mismos de manera eficaz. Atención a procedimientos de cirugía general, ambulatoria y de alta especialidad.',
			'image' => 'img/services/quirofanos.jpg',
			'order' => 2
		]);

		Service::create([
			'service' => 'Cuneros',
			'description' => 'Tiene capacidad de 15 cuneros, 3 incubadoras y 1 cuna radiante. Consiste en uno de los lugares más emblemáticos de nuestro hospital ya que alberga a nuestros pacientes más importantes e indefensos otorgándoles una adaptación adecuada en sus primeras horas de vida, cuidando sus niveles de oxígeno en sangre, manteniéndolos a la temperatura ideal y brindando atención las 24 horas con personal altamente capacitado.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 3
		]);

		Service::create([
			'service' => 'Rayos X',
			'description' => 'Equipo siemens multifuncional con mesa de exploración basculable con sistema de procesamiento digital AGFA para la realización de estudios simples y contrastados, lo que permite un estudio más exacto y cómodo.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 4
		]);

		Service::create([
			'service' => 'Habitaciones',
			'description' => '29 Habitaciones Individuales, 1 Junior Suite, 1 Master Suite, equipadas con televisión con cable, cama eléctrica, ventilador, baño independiente, sofá para el acompañante, teléfono que incluye llamadas locales ilimitadas y aire acondicionado en las junior y master, adicional contamos con 1 Habitación Cuádruple, 1 Tríple y 4 Dobles',
			'image' => 'img/services/urgencias.jpg',
			'order' => 5
		]);

		Service::create([
			'service' => 'Sala de Expulsión',
			'description' => '1 Sala de Labor donde se ofrece un ambiente idóneo para un momento tan importante en la vida como el nacimiento de un hijo, con equipo moderno, seguro y personal altamente calificado.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 6
		]);

		Service::create([
			'service' => 'Unidad de Terapia Intensiva',
			'description' => 'Las áreas de terapia intensiva adultos y neonatal, están asignadas para el manejo de pacientes en estado crítico, equipadas con tecnología de punta que permite la vigilancia estrecha de los mismos y que en conjunto con el desempeño medico brinda las mejores condiciones para salvaguardar la vida en estos difíciles momentos.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 7
		]);

		Service::create([
			'service' => 'Laboratorio',
			'description' => 'Ofrece servicio las 24 hrs. los 365 días del año, realizando exámenes de Biometría, Química Sanguínea, EGO, Coprologico General, Líquidos Corporales, Histopatológicos, Papanicolau, etc.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 8
		]);

		Service::create([
			'service' => 'Ultrasonido',
			'description' => 'Equipo Midray que cuenta con diferentes transductores para la realización de estudios obstétricos abdomino-pélvicos, mamarios, endocavitarios y testiculares, además el equipo cuenta con eco doppler para la realización de estudios arteriales y venosos.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 9
		]);

		Service::create([
			'service' => 'Consultorios Médicos',
			'description' => 'Se ofrece el servicio de consulta general y de especialidades.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 10
		]);

		Service::create([
			'service' => 'Seguridad 24 horas',
			'description' => 'Comprometidos con brindar un servicio de calidad y seguridad contamos con personal de vigilancia altamente capacitado para salvaguardar la integridad y tranquilidad de sus pacientes y familiares las 24 horas del día.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 11
		]);

		Service::create([
			'service' => 'Tomografía Axial Computarizada',
			'description' => 'Tomógrafo siemens emotion dúo multicorte ideal para la realización de estudios simples y contrastados con una rapidez de adquisición de imagen y calidad de vanguardia',
			'image' => 'img/services/urgencias.jpg',
			'order' => 12
		]);

		Service::create([
			'service' => 'Cafetería',
			'description' => '¿Te apetece comer algo? en la cafetería de Hospital de Especialidades Catalina podrás degustar deliciosos desayunos, comidas y cenas.',
			'image' => 'img/services/urgencias.jpg',
			'order' => 13
		]);

		Service::create([
			'service' => 'Oratorio',
			'description' => '',
			'image' => 'img/services/urgencias.jpg',
			'order' => 14
		]);
	}

}