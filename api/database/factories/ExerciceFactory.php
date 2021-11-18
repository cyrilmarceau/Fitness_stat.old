<?php

namespace Database\Factories;

use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Factory;
use stdClass;

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
            'name' => 'Curl haltères sur banc incliné',
            'slug' => 'dumbbell-curl-on-incline-bench',
            'type' => 'Haltère',
            'serie_id' => 6,
        ];
    }
}
