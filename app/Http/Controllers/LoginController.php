<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Affichage de la page de Connexion
    public function login()
    {
        return view('login');
    }

    public function traitlogin(Request $request)
    {
        $email = $request->input('email'); 
        $motDePasse = $request->input('motDePasse');

        $doctor = Doctors::where('email', $email)->first();

        if (!$doctor || !Hash::check($motDePasse, $doctor->password)) {
            return back()->withErrors([
                'motDePasse' => 'Email ou mot de passe incorrect.',
            ]);
        }

        return redirect()->route('dashoard');
    }
}
