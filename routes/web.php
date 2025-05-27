<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/receitas1', [HomeController::class, 'receitas1']);
Route::get('/receitas2', [HomeController::class, 'receitas2']);
Route::get('/receitas3', [HomeController::class, 'receitas3']);
Route::get('/receitas4', [HomeController::class, 'receitas4']);
Route::get('/login', [HomeController::class, 'login']);

Route::get('/welcome', [HomeController::class, 'welcome']);
Route::post('/ingredientes', [HomeController::class, 'ingredientesAcao'])->name('ingredientesAcao');


