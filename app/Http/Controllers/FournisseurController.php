<?php

namespace App\Http\Controllers;

use App\Models\Fournisseurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FournisseurController extends Controller
{

    public function affichefournisseur(){

        $fournisseurs = Fournisseurs::orderBy("nom", "asc")->get();

        return view('fournisseurs.liste', compact('fournisseurs'));
    }

    public function formfournisseur(){
        return view('fournisseurs.create');
    }


            // MODIFIER
    public function modifierFournisseur($id){

        $fournisseur = Fournisseurs::find($id);
        foreach($fournisseur as $fournisseurs);
        return view('fournisseurs.modifier', compact('fournisseur'));

    }

            // METTRE  A JOUR
    public function UpdateFournisseur(Request $request){
        DB::table('fournisseurs')->where('id', $request->id)->update([
            'nom'       => $request -> nom,
            'prenom'    => $request -> prenom,
            'telFournisseurs'=> $request -> telFournisseurs,
            'addresseFournisseur'=> $request -> addresseFournisseur,
        ]);
        return back()->with("success", "Le fournisseur a été modifié !");
    }

             // SUPPRESSION
    public function delete ($id) {

        DB::table('fournisseurs')->where('id', $id)->delete();

        return redirect()->route('fournisseurs.liste')
                         ->with("successDelete", "Le fournisseur a été Supprimé !");

    }
}
