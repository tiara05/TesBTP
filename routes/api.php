<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MetodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*API UNTUK AKTIVITY*/
Route::get('Activity', [ActivityController::class, 'index']);
Route::post('Activity/store', [ActivityController::class, 'store']);
Route::get('Activity/show/{id}', [ActivityController::class, 'show']);
Route::post('Activity/update/{id}', [ActivityController::class, 'update']);
Route::get('Activity/destroy/{id}', [ActivityController::class, 'destroy']);

/*API UNTUK METODE*/
Route::get('Metode', [MetodeController::class, 'index']);
Route::post('Metode/store', [MetodeController::class, 'store']);
Route::get('Metode/show/{id}', [MetodeController::class, 'show']);
Route::post('Metode/update/{id}', [MetodeController::class, 'update']);
Route::get('Metode/destroy/{id}', [MetodeController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
