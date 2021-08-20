<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{

    public function afficheemploye(){

        $employes = Employes::orderBy("nom", "asc")->get();

        return view('employes.liste', compact('employes'));
    }

    public function formemploye(){
        return view('employes.create');
    }

    public function store (Request $request) {

       $request->validate([
            'nom'        => 'required | max:255',
            'prenom'     => 'required | max:255',
            'telEmploye' => 'required | max:10 | numeric',
            'cniEmploye' => 'required | max:11',
            'login'      => 'required | max:255',
            'password'   => 'required | max:255',
        ]);

        Employes::create($request->all());

        return redirect()->route('employes.create')
                         ->with('success', 'Employe crée avec succès.');

    }

            // MODIFIER
     public function modifierEmploye ($id){

        $employe = Employes::find($id);
        foreach($employe as $employes);
        return view('employes.modifier', compact('employe'));

    }

            // METTRE  A JOUR
    public function UpdateEmploye(Request $request){
        DB::table('employes')->where('id', $request->id)->update([
            'nom'       => $request -> nom,
            'prenom'    => $request -> prenom,
            'telEmploye'=> $request -> telEmploye,
            'cniEmploye'=> $request -> cniEmploye,
            'login'     => $request -> login,
            'password'  => $request -> password,
        ]);
        return back()->with("success", "L'employé a été modifié !");
    }

            // SUPPRESSION
    public function delete ($id) {

        DB::table('employes')->where('id', $id)->delete();

        return redirect()->route('employes.liste')->with("successDelete", "L'employe a été Supprimé !");

    }
}
