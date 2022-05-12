<?php

namespace Database\Seeders;
use App\Models\Area;
use App\Models\User;
use App\Models\Serviciostotale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;




use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Roleadmin::class);
        Area::create(['nombre'=>"Construcción"]);//1
        Area::create(['nombre'=>"Electricidad"]);//2
        Area::create(['nombre'=>"Mecánica"]);//3
        ///OBRAS PUBLICAS
        Serviciostotale::create(['nombre'=>"Obras de transporte",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Infraestructura e imagen urbana",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Obras hidráulicas",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Edificios públicos",
                                 'idarea'=>'1']);
        //OBRAS PRIVADAS
        Serviciostotale::create(['nombre'=>"Bodegas y/o naves industriales ",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Mantenimiento industrial",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Casa habitación (interés social, medio residencial y residencial)",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Remodelaciones industriales y de casa habitación",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Edificios (oficinas, habitaciones, hotel.)",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Locales comerciales",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Estacionamientos",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Gimnasios",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Hospitales",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Talleres mecánicos e industriales",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Gasolineras",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Oxxo",
                                 'idarea'=>'1']);
        Serviciostotale::create(['nombre'=>"Topografía",
                                 'idarea'=>'1']);
        // proyectos electricidad
        Serviciostotale::create(['nombre'=>"Electrificaciones publicas",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Electrificaciones industriales",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Electrificaciones de casa habitación",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Electrificaciones de talleres industriales",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Electrificaciones de equipos especiales",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Programación y control de equipos eléctricos",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Programación de equipos industriales",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Instalación de alarmas de seguridad",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Instalación de circuito cerrado",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Automatización de equipos eléctricos",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Proyectos mecatrónicos y de automatización",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Cumplimientos y trámites para CFE/UVIE: CODIGO RED",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Programas de mantenimiento preventivo y correctivo",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Reparaciones eléctricas: tarjetas, inversores y controles",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Retrofits de tableros de control",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Programación de PLC´s y pantallas",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Retrofits y aplicaciones de sistemas SERVO MOTION",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Programación e instalación de controles e inversores vectoriales LC y control de proceso e instrumentación",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Diseño, armado e instalación de tableros de control, distribución, CCM´S",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Instalación y mantenimiento de transformadores ",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Instalación de línea de baja, media y alta tensión",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Estudio de calidad de energía",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Diseño, especificación e instalación de barreras cortafuegos",
                                 'idarea'=>'2']);
        Serviciostotale::create(['nombre'=>"Diseño e instalación de sistema de tierras y para-rayos",
                                 'idarea'=>'2']);
        /// proyectos mecanicos
        Serviciostotale::create(['nombre'=>"Diseño y construcción de bandas transportadoras",
                                 'idarea'=>'3']);
        Serviciostotale::create(['nombre'=>"Movimiento, maniobra y Montaje mecánico de maquinaria",
                                 'idarea'=>'3']);
        Serviciostotale::create(['nombre'=>"Fabricación de tubería, tolvas, tanques, tinas, etc, en acero inoxidable",
                                 'idarea'=>'3']);
        Serviciostotale::create(['nombre'=>"Mantenimiento y reparación de equipos mecánicos, hidroeléctricos, hidráulicos y neumáticos",
                                 'idarea'=>'3']);
        Serviciostotale::create(['nombre'=>"Construcciones, adaptación y refuerzo de estructuras metálicas",
                                 'idarea'=>'3']);
        User::create([

            'name' => 'Administrador',
			'apellidop' => 'empresa',
			'apellidom' => 'priminsa',
			'telefono' => '2226587462',
            'idarea' => '1',
			'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),


        ])->assignRole('Admin');
    }


}
