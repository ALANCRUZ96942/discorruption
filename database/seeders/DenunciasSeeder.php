<?php

namespace Database\Seeders;

use App\Models\Denuncia;
use App\Models\Imagen;
use Illuminate\Database\Seeder;

class DenunciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

    $denuncias = Denuncia::factory(10)->create();
        
    foreach ($denuncias as $denuncia){
         Imagen::factory(1)->create([
             'imagenable_id' => $denuncia->id,
             'imagenable_type' => 'App\Models\Denuncia'
        ]);

    }
    }
}
