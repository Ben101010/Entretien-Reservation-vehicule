<?php

namespace App\Http\Controllers;

use App\Models\Factures;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function affichefactureReservation(){

        $factures = Factures::orderBy("libelleFacture", "asc")->get();

        return view('factures.facturesReservation', compact('factures'));
    }

    public function affichefactureEntretien(){
        return view('factures.facturesEntretien');
    }
}
