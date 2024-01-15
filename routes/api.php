<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('people/MateuszFiutak/310534', [peopleController::class, 'index']);
Route::get('people/{MateuszFiutak/310534}', [peopleController::class, 'show']);
Route::post('people/MateuszFiutak/310534', [peopleController::class, 'store']);
Route::put('people/{MateuszFiutak/310534}', [peopleController::class, 'update']);