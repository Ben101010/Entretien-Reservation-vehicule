<?php

namespace App\Http\Controllers;

use App\Models\PieceDefectueuse;
use Illuminate\Http\Request;

class PieceDefectueuseController extends Controller
{

    public function affichepiece(){

        $pieceDefectueuses = PieceDefectueuse::orderBy("libellePiece", "asc")->get();

        return view('PieceDefectueuse.liste', compact("pieceDefectueuses"));
    }

    public function formpiece(){
        return view('PieceDefectueuse.create');
    }

}
