<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Workout;

class WorkoutController extends Controller{
    
    public function index(){
        $workouts = Workout::all();
        return response()->json($workouts);
    }
}