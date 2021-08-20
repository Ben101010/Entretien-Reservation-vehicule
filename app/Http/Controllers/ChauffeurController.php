<?php

namespace App\Http\Controllers;

use App\Models\Chauffeurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChauffeurController extends Controller
{
    public function affichechauffeur(){

        $chauffeurs = Chauffeurs::orderBy("nom", "asc")->get();

        return view('chauffeurs.liste', compact('chauffeurs'));
    }

    public function formchauffeur(){
        return view('chauffeurs.create');
    }


    public function store (Request $request){

        DB::table('chauffeurs')->insert([
            'nom'          => $request -> nom,
            'prenom'       => $request -> prenom,
            'telChauffeur' => $request -> telChauffeur,
            'cniChauffeur' => $request -> cniChauffeur,
        ]);
        return  redirect()->route('employes.create')
                          ->with("success", "Le chauffeur a été enregistré avec succès");
    }

        // MODIFIER
        public function modifierChauffeur ($id){

            $chauffeur = Chauffeurs::find($id);
            foreach($chauffeur as $chauffeurs);
            return view('chauffeurs.modifier', compact('chauffeur'));

        }
                // METTRE  A JOUR
        public function UpdateChauffeur(Request $request){
            DB::table('Chauffeurs')->where('id', $request->id)->update([
                'nom'          => $request -> nom,
                'prenom'       => $request -> prenom,
                'telChauffeur' => $request -> telChauffeur,
                'cniChauffeur' => $request -> cniChauffeur,
            ]);
            return back()->with("success", "Le Chauffeur a été modifié !");
        }

             // SUPPRESSION
        public function delete($id){

        DB::table('chauffeurs')->where('id', $id)->delete();

        return redirect()->route('chauffeurs.liste')->with("successDelete", "Le chauffeur a été Supprimé !");
    }
}
