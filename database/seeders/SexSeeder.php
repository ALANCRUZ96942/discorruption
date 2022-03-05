<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexo::create([
            'name'=> 'Hombre'
        ]);
        Sexo::create([
            'name'=> 'Mujer'
        ]);
        Sexo::create([
            'name'=> 'No especificado'
        ]);
    }
}
