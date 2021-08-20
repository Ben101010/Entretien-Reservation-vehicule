<?php

namespace App\Http\Controllers;

use App\Models\Factures;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function affichefacture(){

        $factures = Factures::orderBy("libelleFacture", "asc")->get();

        return view('factures.liste', compact('factures'));
    }

    public function formfacture(){
        return view('factures.create');
    }
}
