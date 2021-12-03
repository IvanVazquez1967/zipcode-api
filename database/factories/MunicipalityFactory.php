<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(true)->numberBetween(1, 60),
            'name' => $this->faker->city(),
        ];
    }
}
