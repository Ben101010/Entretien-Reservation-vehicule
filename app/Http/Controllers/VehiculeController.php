<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function affichevehicule(){

        $vehicules = Vehicule::orderBy("immatriculationVehicule", "asc")->get();

        return view('vehicules.liste', compact("vehicules"));
    }

    public function formvehicule(){
        return view('vehicules.create');
    }
}
