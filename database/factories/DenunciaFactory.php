<?php

namespace Database\Factories;

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
            'place'=> $this->faker->sentence(),
            'sex'=> 'H',
            'date'=> $this->faker->date('Y-m-d', 'now'),
            'age'=>25
        ];
    }
}
