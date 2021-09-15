<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Fournisseurs;
use Illuminate\Http\Request;
use App\Models\PieceDefectueuses;
use Illuminate\Support\Facades\DB;

class PieceDefectueuseController extends Controller
{

    public function affichepiece(){

        $pieceDefectueuses = PieceDefectueuses::orderBy("libellePiece", "asc")->get();

        return view('PieceDefectueuse.liste', compact("pieceDefectueuses"));
    }

    public function formpiece(){

        $fournisseurs = Fournisseurs::all();
        $maintenances = Maintenance::all();

        return view('PieceDefectueuse.create', compact('fournisseurs','maintenances'));
    }


            // MODIFIER
     public function modifierPieceDefectueuse ($id){

        $pieceDefectueuse = PieceDefectueuses::find($id);
        //foreach($pieceDefectueuses as $pieceDefectueuse);
        return view('PieceDefectueuse.modifier', compact('pieceDefectueuse'));

    }
            // METTRE  A JOUR
    public function UpdatePieceDefectueuse(Request $request){
        DB::table('piece_defectueuses')->where('id', $request->id)->update([
            'libellePiece'      => $request -> nom,
            'fournisseur_id'    => $request -> fournisseur,
            'maintenance_id'    => $request -> maintenance,
        ]);
        return back()->with("success", "La pièce a été modifié !");
    }

         // SUPPRESSION
    public function delete($id){

    DB::table('piece_defectueuses')->where('id', $id)->delete();

    return redirect()->route('PieceDefectueuse.liste')->with("successDelete", "La pièce defectueuse a été Supprimé !");
}
}
