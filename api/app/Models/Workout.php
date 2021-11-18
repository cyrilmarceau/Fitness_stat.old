<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public static function findWorkoutByDate($request)
    {
        $date = Carbon::parse($request->get('date'))->format('Y-m-d');;
        return Workout::where('date', '=', $date)->first();
    }
}
