<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/receitas', [HomeController::class, 'receitas']);
Route::get('/welcome', [HomeController::class, 'welcome']);



Route::post('/ingredientes', [HomeController::class, 'ingredientesAcao'])->name('ingredientesAcao');


