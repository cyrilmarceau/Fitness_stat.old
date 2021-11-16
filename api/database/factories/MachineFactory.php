<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['WIDE CHEST PRESS', 'ARM EXTENSION', 'PURE BICEPS', 'VERTICAL TRACTION']),
            'seat_height' => rand(0,15),
        ];
    }
}
