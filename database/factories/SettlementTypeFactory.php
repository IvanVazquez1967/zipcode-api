<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettlementTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(true)->numberBetween(1, 24),
            'type' => $this->faker->word,
        ];
    }
}
