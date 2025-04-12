<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Affichage du dashboard
    public function dashboard()
    {
        $patients = Patient::all(); 
        return view('dashboard', compact('patients'));
    }

    public function patient()
    {
        return view('patients');
    }

    public function traitpatient(Request $request)
    {
        $patient =  Patient::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'dateDeNaissance' => $request->input('naissance'),
            'sexe' => $request->input('sexe'),
            'adresse' => $request->input('adresse'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phonenumber'),
        ]);

        $patients = Patient::all(); 
        return view('vuegen', compact('patients'));
    }

    public function visit() {
        return view('visit');
    }

    public function visitpatient(Request $request) {
        $visit =  Visit::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'dateDeReunion' => $request->input('dateDeReunion'),
            'heure' => $request->input('heure')
        ]);
    }

    public function liste() {
        $patients = Patient::all(); 
        return view('vuegen', compact('patients'));
    }
}
