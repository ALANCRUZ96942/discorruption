<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'name'=> 'Aguascalientes'
        ]);
        Estado::create([
            'name'=> 'Baja California Norte'
        ]);
        Estado::create([
            'name'=> 'Baja California Sur'
        ]);
        Estado::create([
            'name'=> 'Campeche'
        ]);
        Estado::create([
            'name'=> 'Chiapas'
        ]);
        Estado::create([
            'name'=> 'Chihuahua'
        ]);
        Estado::create([
            'name'=> 'Ciudad de México'
        ]);
        Estado::create([
            'name'=> 'Coahuila'
        ]);
        Estado::create([
            'name'=> 'Colima'
        ]);
        Estado::create([
            'name'=> 'Durango'
        ]);
        Estado::create([
            'name'=> 'Estado de México'
        ]);
        Estado::create([
            'name'=> 'Guanajuato'
        ]);
        Estado::create([
            'name'=> 'Guerrero'
        ]);
        Estado::create([
            'name'=> 'Hidalgo'
        ]);
        Estado::create([
            'name'=> 'Jalisco'
        ]);
        Estado::create([
            'name'=> 'Michoacán'
        ]);
        Estado::create([
            'name'=> 'Morelos'
        ]);
        Estado::create([
            'name'=> 'Nayarit'
        ]);
        Estado::create([
            'name'=> 'Nuevo León'
        ]);
        Estado::create([
            'name'=> 'Oaxaca'
        ]);
        Estado::create([
            'name'=> 'Puebla'
        ]);
        Estado::create([
            'name'=> 'Querétaro'
        ]);
        Estado::create([
            'name'=> 'Quintana Roo'
        ]);
        Estado::create([
            'name'=> 'San Luis Potosí'
        ]);
        Estado::create([
            'name'=> 'Sinaloa'
        ]);
        Estado::create([
            'name'=> 'Sonora'
        ]);
        Estado::create([
            'name'=> 'Tabasco'
        ]);
        Estado::create([
            'name'=> 'Tamaulipas'
        ]);
        Estado::create([
            'name'=> 'Tlaxcala'
        ]);
        Estado::create([
            'name'=> 'Veracruz'
        ]);
        Estado::create([
            'name'=> 'Yucatan'
        ]);
        Estado::create([
            'name'=> 'Zacatecas'
        ]);
    }
}
