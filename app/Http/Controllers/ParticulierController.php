<?php

namespace App\Http\Controllers;

use App\Models\Particuliers;
use Illuminate\Http\Request;

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
             'emailParticulier'  => 'required | email',
             'telParticulier1'   => 'required | max:10 | numeric',
             'telParticulier2'   => 'required | max:10 | numeric',
         ]);

         Particuliers::create($request->all());

         return redirect()->route('particuliers.create')
                          ->with('success', 'Particulier crée avec succès.');
    }
}
