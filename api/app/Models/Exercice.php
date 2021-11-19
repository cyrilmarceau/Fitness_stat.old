<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
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

    public function serie() {
        return $this->hasMany(Serie::class);
    }

    public static function index() {
        $exercices = Exercice::all();
        if($exercices) {
            return $exercices;
        } else {
            return null;
        }
    }


    public static function findExercicesByWorkoutID($id) {

        $exercicesByWorkout = Exercice::where('workout_id', '=', $id)->get();

        if(!$exercicesByWorkout) {
            return null;
        } else {
            $exercices = null;

            foreach ($exercicesByWorkout as $exercice) {
                $exercicesRelations = Exercice::with('machine')->with('workout')->with('serie')->findOrFail($exercice->id);
                $exercicesRelations->makeHidden(['workout_id','machine_id']);
                $exercices[] = $exercicesRelations;
            }
            return $exercices;
        }

    }
}