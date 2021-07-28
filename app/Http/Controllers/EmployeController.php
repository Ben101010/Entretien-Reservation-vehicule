<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function afficheemploye(){

        $employes = Employes::orderBy("nom", "asc")->get();

        return view('employes.liste', compact('employes'));
    }

    public function formemploye(){
        return view('employes.create');
    }
}
