<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\Weight;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'workout_id' => Workout::inRandomOrder()->first()->id,
            'machine_id' => Machine::inRandomOrder()->first()->id,
            'weight_id' => Weight::inRandomOrder()->first()->id,
            'repetitions' => rand(8, 12),
        ];
    }
}
