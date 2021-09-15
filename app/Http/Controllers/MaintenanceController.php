<?php

namespace App\Http\Controllers;

use App\Models\Garages;
use App\Models\Maintenance;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class MaintenanceController extends Controller
{

    public function affichemaintenance(){



        $maintenances = Maintenance::orderBy("libelleMaintenance", "asc")->get();

        return view('maintenances.liste', compact('maintenances'));
    }

    public function formmaintenance(){

        $garages = Garages::all();
        $vehicules = Vehicule::all();

        return view('maintenances.create',compact('garages','vehicules'));
    }


    public function store (Request $request){

        DB::table('Maintenances')->insert([
            'libelleMaintenance'=> $request ->libelleMaintenance,
            'garage_id'         => $request ->garage,
            'vehicule_id'       => $request ->matricule,
        ]);

        return  redirect()->route('maintenances.create')->with("success", "La maintenance a été enregistré avec succès");
    }

     // MODIFIER
    public function modifierMaintenance ($id){

        $maintenances = Maintenance::find($id);
        foreach($maintenances as $maintenance);
        return view('Maintenances.modifier', compact('maintenances'));

    }
            // METTRE  A JOUR
    public function UpdateMaintenance(Request $request){
        DB::table('Maintenances')->where('id', $request->id)->update([
            'libelleMaintenance' => $request -> libelleMaintenance,
            'garage_id'          => $request -> garage,
            'vehicule_id'        => $request -> matricule,
        ]);
        return back()->with("success", "La maintenance a été modifié !");
    }

         // SUPPRESSION
    public function delete($id){

    DB::table('Maintenances')->where('id', $id)->delete();

    return redirect()->route('Maintenances.liste')->with("successDelete", "La maintenance a été Supprimé !");
}
}
