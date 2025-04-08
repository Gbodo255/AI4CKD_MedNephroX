<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Affichage de la page de Connexion
    public function login() {
        return view('login');
    }
}
