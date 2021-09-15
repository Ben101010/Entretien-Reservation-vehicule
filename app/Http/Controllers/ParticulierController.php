<?php

namespace App\Http\Controllers;

use App\Models\Particuliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticulierController extends Controller
{
    public function afficheparticulier(){

        $particuliers = Particuliers::orderBy("nom", "asc")->get();

        return view('particuliers.liste',compact('particuliers'));
    }

    public function formparticulier(){
        return view('particuliers.create');
    }

    public function store (Request $request){

        $request->validate([
            'nom'               => 'required | max:255',
            'prenom'            => 'required | max:255',
            'cniParticulier'    => 'required | max:11',
            'telParticulier1'   => 'required | max:10 | numeric',
            'telParticulier2'   => 'required | max:10 | numeric',
            'emailParticulier'  => 'required | email',
            ]);

            Particuliers::create($request->all());

            return redirect()->route('particuliers.create')
                    ->with('success', 'Particulier crée avec succès.');
    }

             // MODIFIER
    public function modifierParticulier ($id){

        $particulier = Particuliers::find($id);
        foreach($particulier as $particuliers);
        return view('particuliers.modifier', compact('particulier'));

    }
            // METTRE  A JOUR
    public function UpdateParticulier(Request $request){
        DB::table('particuliers')->where('id', $request->id)->update([
            "nom"               => $request -> nom,
            "prenom"            => $request -> prenom,
            "cniParticulier"    => $request -> cniParticulier,
            "emailParticulier"  => $request -> emailParticulier,
            "telParticulier1"   => $request -> telParticulier1,
            "telParticulier2"   => $request -> telParticulier2,
        ]);
        return back()->with("success", "Le particulier a été modifié !");
    }

            // SUPPRESSION

    public function delete($id){

        DB::table('particuliers')->where('id', $id)->delete();

        return redirect()->route('particuliers.liste')->with("successDelete", "Particulier Supprimé !");

    }
}
