<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'evidencias/'. $this->faker->image('public/storage/evidencias',640,480,null,false),
        ];
    }
}
