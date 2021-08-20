<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeleController extends Controller
{

    public function affichemodele(){

        $modeles = Modele::orderBy("libelleVehicule", "asc")->get();

        return view('modeles.liste', compact("modeles"));
    }

    public function formmodele(){
        return view('modeles.create');
    }

    public function store (Request $request){

        $request->validate([
             'libelleVehicule' => 'required | max:255',
         ]);

         Modele::create($request->all());

         return redirect()->route('modeles.create')
                          ->with('success', 'Le modèle du véhicule a été crée avec succès.');

    }

            // MODIFIER
    public function modifierModele ($id){

        $modele = Modele::find($id);
        foreach($modele as $modeles);
        return view('modeles.modifier', compact('modele'));
    }

            // METTRE  A JOUR
    public function UpdateModele(Request $request){
        DB::table('modeles')->where('id', $request->id)->update([
            "libelleVehicule" => $request -> libelleVehicule,
        ]);
        return back()->with("success", "Le modèle a été modifié !");
    }

            // SUPPRESSION
    public function delete($id){

        DB::table('modeles')->where('id', $id)->delete();

        return redirect()->route('modeles.liste')->with("successDelete", "Le modèle a été Supprimé !");

    }

}
