<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public static function index() {
        $machines = Machine::all();

        if(!$machines) {
            return null;
        } else {
            return response()->json([
                'message' => 'No exercice found',
                'status' => 404
            ]);
        }
    }
}
