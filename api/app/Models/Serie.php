<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Serie extends Model
{
    use HasFactory;

    public function exercice() {
        return $this->belongsTo(Exercice::class);
    }

    public function workout() {
        return $this->belongsTo(Workout::class);
    }

    public function machine() {
        return $this->belongsTo(Machine::class);
    }

    public static function findSeriesByWorkoutID($id) {

        $seriesByWorkout = Serie::where('workout_id', '=', $id)->get();

        $series = null;

        foreach ($seriesByWorkout as $serie) {
            $serie = Serie::with('machine')->with('workout')->findOrFail($serie->id);
            $serie->makeHidden(['workout_id','machine_id','weight_id']);
            $series[] = $serie;
        }
        return $series;
    }

    public static function findSerie($id) {
        $serie = Serie::with('machine')->with('workout')->findOrFail($id);
        $serie->makeHidden(['workout_id','machine_id','weight_id']);
        return $serie;
    }
}
