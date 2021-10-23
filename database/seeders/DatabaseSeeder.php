<?php

namespace Database\Seeders;
use App\Models\Area;
use App\Models\User;
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
        Area::create(['nombre'=>"Construcción"]);
        Area::create(['nombre'=>"Electricidad"]);
        Area::create(['nombre'=>"Mecánica"]);

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
