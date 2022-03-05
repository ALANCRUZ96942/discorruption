<?php

namespace Database\Seeders;

use App\Models\Escolaridad;
use Illuminate\Database\Seeder;

class EscolaridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escolaridad::create([
            'name'=> 'Básica'
        ]);
        Escolaridad::create([
            'name'=> 'Media Superior'
        ]);
        Escolaridad::create([
            'name'=> 'Superior'
        ]);
        Escolaridad::create([
            'name'=> 'Posgrado'
        ]);
    }
}
