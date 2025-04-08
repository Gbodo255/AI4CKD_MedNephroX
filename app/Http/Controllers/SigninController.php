<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use Illuminate\Support\Facades\Hash;

class SigninController extends Controller
{
    //Affichage de la page d'inscription
    public function signin() {
        return view('signin');
    }

    //Traitement des données
    public function traitsign(Request $request) {
        $doctor = Doctors::create([
            'name'=> $request->input('nom'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);

        return view('login');
    }
}
