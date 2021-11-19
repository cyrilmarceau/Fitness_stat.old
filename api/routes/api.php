<?php

use App\Http\Controllers\ExerciceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\SerieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("workouts", [WorkoutController::class, 'index']);
Route::post("workout", [WorkoutController::class, 'findWorkoutByDate']);

Route::get("exercices", [ExerciceController::class, 'index']);
Route::get("workout/{id}/exercices/", [ExerciceController::class, 'getAllExerciceByWorkoutID']);

// Route::get("series", [SerieController::class, 'index']);
// Route::get("series/workout/{id}", [SerieController::class, 'getAllSeriesByWorkoutID']);