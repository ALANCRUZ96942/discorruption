<?php

namespace Database\Factories;

use App\Models\Acto;
use App\Models\Escolaridad;
use App\Models\Estado;
use App\Models\Sexo;
use Illuminate\Database\Eloquent\Factories\Factory;

class DenunciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(),
            'description'=> $this->faker->sentence(),
            'sexo_id'=> Sexo::all()->random()->id,
            'date'=> $this->faker->date('Y-m-d', 'now'),
            'age'=>25,
            'acto_id'=> Acto::all()->random()->id,
            'estado_id'=> Estado::all()->random()->id,
            'escolaridad_id'=> Escolaridad::all()->random()->id,
        ];
    }
}
