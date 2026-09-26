<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', [FoodController::class, 'index']);


Route::get('/foods', [FoodController::class, 'index']);
Route::get('/foods/create', [FoodController::class, 'create']);
Route::post('/foods', [FoodController::class, 'store']);

Route::get('/foods/{food}/edit', [FoodController::class, 'edit']);
Route::put('/foods/{food}', [FoodController::class, 'update']);
Route::delete('/foods/{food}', [FoodController::class, 'destroy']);