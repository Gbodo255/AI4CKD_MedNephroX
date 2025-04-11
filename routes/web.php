<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use League\CommonMark\Extension\SmartPunct\DashParser;

//Affichage de la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('accueil');

//Controller de la page de connexion
Route::get('/login', [LoginController::class, 'login'])->name('connexion');
Route::post('/logtrait', [LoginController::class, 'traitlogin'])->name('logitraitpage');


//Controller de la page d'inscription
Route::get('/signin', [SigninController::class, 'signin'])->name('inscription');
Route::post('/signtrait', [SigninController::class, 'traitsign'])->name('traitement');


//Controller de la page de dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashoard');

Route::get('/patientVue', [DashboardController::class, 'liste'])->name('listepatient');
Route::get('/patient', [DashboardController::class, 'patient'])->name('patient');
Route::post('/trait', [DashboardController::class, 'traitpatient'])->name('traitpage');

Route::get('/visit', [DashboardController::class, 'visit'])->name('visit');
Route::post('/traitvisit', [DashboardController::class, 'visitpatient'])->name('visitpatient');
