<?php

namespace App\Http\Controllers;

use App\Models\Marques;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function accueil(){

        $marques = Marques::orderBy("libelleMarque", "asc")->get();

        return view('marques.liste', compact('marques'));
    }

    public function accueil1(){
        return view('marques.create');
    }
}
