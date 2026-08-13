<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentApiController;

Route::get('/students', [StudentApiController::class, 'index']);
Route::post('/students', [StudentApiController::class, 'store']);
Route::get('/students/{id}', [StudentApiController::class, 'show']);
Route::put('/students/{id}', [StudentApiController::class, 'update']);
Route::delete('/students/{id}', [StudentApiController::class, 'destroy']);