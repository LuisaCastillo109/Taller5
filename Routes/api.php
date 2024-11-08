<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
Route::get('/students', [StudentController::class,'index']);

Route::get('/students/{id}',[StudentController::class,'show']);


Route::post('/students', [StudentController::class,'store']);

Route::put('/students', [StudentController::class,'update']);


Route::delete('/students/{id}',[StudentController::class,'destroy']);
