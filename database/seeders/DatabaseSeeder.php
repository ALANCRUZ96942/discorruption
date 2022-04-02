<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        Storage::deleteDirectory('evidencias');
        Storage::makeDirectory('evidencias');
        $this->call(StatusSeeder::class);
        $this->call(ActosSeeder::class);
        $this->call(SexSeeder::class);
        $this->call(EscolaridadSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(DenunciasSeeder::class);

    }
}
