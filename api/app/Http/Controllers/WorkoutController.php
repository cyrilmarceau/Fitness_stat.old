<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Workout;

class WorkoutController extends Controller{
    
    public function index() {
        $workouts = Workout::all();
        return response()->json([
            'datas' => $workouts,
            'status' => 200
        ]);
    }

    public function findWorkoutByDate(Request $request) {
        if($request->has('date')){
            $workouts = Workout::findWorkoutByDate($request);
            return response()->json($workouts);
        } else {
            return response()->json([
                'message' => 'Please provide a date',
                'status' => 400
            ]);
        }
        
    }
}