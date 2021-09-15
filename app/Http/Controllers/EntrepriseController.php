<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use App\Models\Particuliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    public function afficheentreprise(){

        $entreprises = Entreprises::orderBy("designEntreprise", "asc")->get();

        return view('entreprises.liste', compact('entreprises'));
    }

    public function formentreprise(){
        return view('entreprises.create');
    }

    public function store (Request $request){

        $request->validate([
             'designEntreprise' => 'required | max:255',
             'localEntreprise'  => 'required | max:255',
             'nccEntreprise'    => 'required | max:8',
             'emailEntreprise'  => 'required | email',
             'telEntreprise1'   => 'required | max:10 | numeric',
             'telEntreprise2'   => 'required | max:10 | numeric',
         ]);

         Entreprises::create($request->all());

         return redirect()->route('entreprises.create')
                          ->with('success', 'Entreprise crée avec succès.');

    }

            // MODIFIER
     public function modifierentreprise ($id){

        $entreprise = Entreprises::find($id);
        foreach($entreprise as $entreprises);
        return view('entreprises.modifier', compact('entreprise'));

    }
            // METTRE  A JOUR
    public function Updateentreprise(Request $request){
        DB::table('entreprises')->where('id', $request->id)->update([

            "designEntreprise"     => $request -> designEntreprise,
            "localEntreprise"      => $request -> localEntreprise,
            "nccEntreprise"        => $request -> nccEntreprise,
            "emailEntreprise"      => $request -> emailEntreprise,
            "telEntreprise1"       => $request -> telEntreprise1,
            "telEntreprise2"       => $request -> telEntreprise2,
        ]);
        return back()->with("success", "L'Entreprise' a été modifié !");
    }

            // SUPPRESSION

    public function delete($id){

        DB::table('entreprises')->where('id', $id)->delete();

        return redirect()->route('entreprises.liste')->with("successDelete", "Entreprise Supprimé !");

    }
}
