<?php

namespace App\Http\Controllers;

use App\Models\Garages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

             // MODIFIER
    public function modifierGarage ($id){

        $garage = Garages::find($id);
        foreach($garage as $marques);
        return view('garages.modifier', compact('garage'));

    }
            // METTRE  A JOUR
    public function UpdateGarage(Request $request){
        DB::table('garages')->where('id', $request->id)->update([
            "nom"           => $request -> nom,
            "numeroGarage"  => $request -> numeroGarage,
            "adresseGarage" => $request -> adresseGarage,
        ]);
        return back()->with("success", "Le garage a été modifié !");
    }

            // SUPPRESSION

    public function delete($id){

        DB::table('garages')->where('id', $id)->delete();

        return redirect()->route('garages.liste')->with("successDelete", "Garage Supprimé !");

    }
}
