<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;

//Affichage de la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('accueil');

//Controller de la page de connexion
Route::get('/login', [LoginController::class, 'login'])->name('connexion');


//Controller de la page d'inscription
Route::get('/signin', [SigninController::class, 'signin'])->name('inscription');
Route::post('/signtrait', [SigninController::class, 'traitsign'])->name('traitement');


//Controller de la page de dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashoard');

