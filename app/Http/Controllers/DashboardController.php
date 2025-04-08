<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Affichage du dashboard
    public function dashboard() {
        return view('dashboard');
    }
}
