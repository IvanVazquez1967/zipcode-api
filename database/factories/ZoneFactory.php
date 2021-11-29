<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word,
        ];
    }
}
