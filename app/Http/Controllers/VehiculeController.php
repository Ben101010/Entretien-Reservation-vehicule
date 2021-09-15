<?php

namespace App\Http\Controllers;

use App\Models\Marques;
use App\Models\Modele;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function affichevehicule(){

        $vehicules = Vehicule::orderBy("immatriculationVehicule", "asc")->get();

        return view('vehicules.liste', compact('vehicules'));
    }

    public function formvehicule(){
        $marques = Marques::all();
        $modeles = Modele::orderBy("libelleVehicule", "asc")->get();
        return view('vehicules.create', compact('marques', 'modeles'));
    }

            // ENREGISTRER UN VEHICULE
    public function store (Request $request){

            $request->validate([
                'immatriculationVehicule'       => 'required | max:255',
                'typeTransmission'              => 'required | max:255',
                'couleur'                       => 'required | string',
                'energie'                       => 'required | string',
                'marque_id'                     => 'required | string',
                'modele_id'                     => 'required | string',
            ]);

        Vehicule::create($request->all());

        return redirect()->route('vehicules.create')
                        ->with('success', 'Le vehicule a été enregistré !');
    }
}
