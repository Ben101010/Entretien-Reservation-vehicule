<?php

namespace App\Http\Controllers;

use App\Models\Fournisseurs;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{

    public function affichefournisseur(){

        $fournisseurs = Fournisseurs::orderBy("nom", "asc")->get();

        return view('fournisseurs.liste', compact('fournisseurs'));
    }

    public function formfournisseur(){
        return view('fournisseurs.create');
    }

}
