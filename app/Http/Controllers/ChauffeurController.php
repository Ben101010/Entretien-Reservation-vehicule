<?php

namespace App\Http\Controllers;

use App\Models\Chauffeurs;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function affichechauffeur(){

        $chauffeurs = Chauffeurs::orderBy("nom", "asc")->get();

        return view('chauffeurs.liste', compact('chauffeurs'));
    }

    public function formchauffeur(){
        return view('chauffeurs.create');
    }
}
