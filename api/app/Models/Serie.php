<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Serie extends Model
{
    use HasFactory;

    public function workout() {
        return $this->belongsTo(Workout::class);
    }

    public function machine() {
        return $this->belongsTo(Machine::class);
    }

    public function weight() {
        return $this->belongsTo(Weight::class);
    }

    public static function findSeriesByWorkoutID($id) {
        $series = DB::table('series')
        ->where('workout_id', '=', $id)
        ->get();
        return $series;
    }

    public static function findSerie($id) {
        $serie = Serie::with('machine')->with('weight')->with('workout')->findOrFail($id);
        $serie->makeHidden(['workout_id','machine_id','weight_id']);
        return $serie;
    }
}