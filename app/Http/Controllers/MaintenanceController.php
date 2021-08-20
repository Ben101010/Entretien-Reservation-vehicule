<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class MaintenanceController extends Controller
{
    public function affichemaintenance(){

        $maintenances = Maintenance::orderBy("libelleMaintenance", "asc")->get();

        return view('maintenances.liste', compact('maintenances'));
    }

    public function formmaintenance(){
        return view('maintenances.create');
    }
}
