<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\Serie;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciceFactory extends Factory
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
            'type' => 'dumbbells',
            'slug' => 'dumbbell-curl-on-incline-bench',
            'name' => 'Curl haltères sur banc incliné',
        ];
    }
}
