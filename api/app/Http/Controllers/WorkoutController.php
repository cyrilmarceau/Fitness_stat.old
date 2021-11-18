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
            if($workouts){
                return response()->json([
                    'datas' => $workouts,
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'message' => 'No workout found',
                    'status' => 404
                ]);
            }
        } else  {
            return response()->json([
                'message' => 'Please provide a date',
                'status' => 400
            ]);
        }
        
    }
}