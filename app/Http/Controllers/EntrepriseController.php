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
}
