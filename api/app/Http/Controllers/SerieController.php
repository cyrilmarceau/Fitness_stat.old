<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;



class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return response()->json($series);
    }

    public function getAllSeriesByWorkoutID($id){
        $series = Serie::findSeriesByWorkoutID($id);

        return response()->json($series);
    }
}
