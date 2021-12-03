<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettlementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(true)->numberBetween(1, 80),
            'name' => $this->faker->streetName(),
            'settlement_type_id' => rand(1, 24),
        ];
    }
}
