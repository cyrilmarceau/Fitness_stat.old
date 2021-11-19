<?php

namespace App\Http\Controllers;

use App\Models\Exercice;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    public function index() {
        $exercices = Exercice::all();
        return response()->json($exercices);
    }

    public function getAllExerciceByWorkoutID($id) {
        if($id) {
            $exercices = Exercice::findExercicesByWorkoutID($id);

            if($exercices) {
                return response()->json([
                    'datas' => $exercices,
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'message' => 'No exercice found',
                    'status' => 404
                ]);
            }
        } else {
            return response()->json([
                'message' => 'Fill in an id',
                'status' => 400
            ]);
        }
        
    }
}
