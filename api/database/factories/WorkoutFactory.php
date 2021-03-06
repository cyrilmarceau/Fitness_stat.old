<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Date;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;


class WorkoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $random = Carbon::today()->subDays(rand(0, 365))->toDateString();
        
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'date' => $random,
        ];
    }
}