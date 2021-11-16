<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Machine;
use App\Models\Serie;
use App\Models\User;
use App\Models\Weight;
use App\Models\Workout;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Workout::factory(3)->create();
        Machine::factory(4)->create();
        Weight::factory(4)->create();
        Serie::factory(6)->create();
    }
}