<?php

namespace App\Http\Controllers;

use App\Models\Garages;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    public function affichegarage(){

        $garages = Garages::orderBy("nom", "asc")->get();

        return view('garages.liste', compact('garages'));
    }

    public function formgarage(){
        return view('garages.create');
    }
}
