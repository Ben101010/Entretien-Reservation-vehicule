<?php

namespace App\Http\Controllers;

use App\Models\Marques;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
class MarqueController extends Controller
{
    public function accueil(){

        $marques = Marques::orderBy("libelleMarque", "asc")->get();

        return view('marques.liste', compact('marques'));
    }

    public function accueil1(){
        return view('marques.create');
    }

            //  AJOUTER
    public function store (Request $request){
        DB::table('marques')->insert([
            "libelleMarque" => $request -> libelleMarque,
        ]);
        return  redirect()->route('marques.liste')
                          ->with("succes", "La marque a été enregistré avec succès");

    }

            // MODIFIER
    public function modifierMarque ($id){

        $marque = Marques::find($id);
        foreach($marque as $marques);
        return view('marques.modifier', compact('marque'));

    }
            // METTRE  A JOUR
    public function UpdateMarque(Request $request){
        DB::table('marques')->where('id', $request->id)->update([
            "libelleMarque" => $request -> libelleMarque,
        ]);
        return back()->with("success", "La marque a été modifié !");
    }

            // SUPPRESSION
    public function delete($id){

        DB::table('marques')->where('id', $id)->delete();

        return redirect()->route('marques.liste')->with("successDelete", "La marque a été Supprimé !");

    }
}
