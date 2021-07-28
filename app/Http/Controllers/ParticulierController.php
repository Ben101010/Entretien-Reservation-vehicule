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
}
