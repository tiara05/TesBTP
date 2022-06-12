<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ActivityController::class,'index']);
Route::get('/read',[ActivityController::class,'read']);
Route::get('/create',[ActivityController::class,'create']);
Route::get('/createmetode',[ActivityController::class,'createmetode']);
Route::get('/store',[ActivityController::class,'store']);
Route::get('/storemetode',[ActivityController::class,'storemetode']);
Route::get('/show/{id}',[ActivityController::class,'show']);
Route::get('/update/{id}',[ActivityController::class,'update']);
Route::get('/destroy/{id}',[ActivityController::class,'destroy']);
