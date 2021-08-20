<?php

namespace App\Http\Controllers;

use App\Models\Garages;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function affichegarage(){

        $garages = Garages::orderBy("nom", "asc")->get();

        return view('garages.liste', compact('garages'));
    }

    public function formgarage(){
        return view('garages.create');
    }

    public function store (Request $request){

        $request->validate([
             'nom'           => 'required | max:255',
             'numeroGarage'  => 'required | max:13',
             'adresseGarage' => 'required | max:255',
         ]);

         Garages::create($request->all());

         return redirect()->route('garages.create')
                          ->with('success', 'Le garage a été crée avec succès.');

     }
}
