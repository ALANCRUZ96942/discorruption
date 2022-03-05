<?php

namespace Database\Seeders;

use App\Models\Acto;
use Illuminate\Database\Seeder;

class ActosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acto::create([
            'name'=> 'Ejercicio ilícito de servicio público'
        ]);
        Acto::create([
            'name'=> 'Cohecho'
        ]);
        Acto::create([
            'name'=> 'Peculado'
        ]);
        Acto::create([
            'name'=> 'Abuso de funciones'
        ]);
        Acto::create([
            'name'=> 'Desvío de recursos públicos'
        ]);
        Acto::create([
            'name'=> 'Actuación bajo conflicto de interés'
        ]);
        Acto::create([
            'name'=> 'Utilización indebida de información'
        ]);
        Acto::create([
            'name'=> 'Contratación indebida'
        ]);
        Acto::create([
            'name'=> 'Tráfico de influencias'
        ]);
        Acto::create([
            'name'=> 'Enrequecimiento oculto'
        ]);
        Acto::create([
            'name'=> 'Encubrimiento'
        ]);
        Acto::create([
            'name'=> 'Simulación de actos jurídicos'
        ]);
       Acto::create([
            'name'=> 'Desacato'
        ]);
        Acto::create([
            'name'=> 'Nepotismo'
        ]);
        Acto::create([
            'name'=> 'Soborno'
        ]);
        Acto::create([
            'name'=> 'Tráfico de influencias para inducir a la autoridad'
        ]);
        Acto::create([
            'name'=> 'Utilización de información falsa'
        ]);
        Acto::create([
            'name'=> 'Participación ilícita en procedimientos administrativos'
        ]);
        Acto::create([
            'name'=> 'Obstrucción de facultades de investigación'
        ]);
        Acto::create([
            'name'=> 'Conclusión'
        ]);
        Acto::create([
            'name'=> 'Contratación indebida de ex servidores públicos'
        ]);
        Acto::create([
            'name'=> 'Uso indebido de recursos públicos'
        ]);
        Acto::create([
            'name'=> 'Faltas de particulares'
        ]);
    }
}
