<?php

namespace Database\Factories;

use App\Models\Exercice;
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
            'exercice_id' => Exercice::inRandomOrder()->first()->id,
            'repetitions' => rand(8, 12),
            'difficulty' => $this->faker->randomElement([true,false]),
            'weight' => rand(0,150),
        ];
    }
}
