<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZipcodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => $this->faker->numberBetween(1, 40),
            'municipality_id' => $this->faker->numberBetween(1, 60),
            'settlement_id' => $this->faker->numberBetween(1, 80),
            'state_id' => $this->faker->numberBetween(1, 32),
            'zone_id' => $this->faker->numberBetween(1, 2),
            'code' => $this->faker->unique()->randomNumber(5, true),
        ];
    }
}
