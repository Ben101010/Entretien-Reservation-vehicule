<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use Illuminate\Http\Request;

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
}
