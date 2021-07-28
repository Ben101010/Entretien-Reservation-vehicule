<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    public function affichemodele(){

        $modeles = Modele::orderBy("libelleVehicule", "asc")->get();

        return view('modeles.liste', compact("modeles"));
    }

    public function formmodele(){
        return view('modeles.create');
    }
}
