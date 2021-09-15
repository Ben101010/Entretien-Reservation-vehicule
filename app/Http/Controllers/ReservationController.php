<?php

namespace App\Http\Controllers;

use App\Models\Particuliers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function affichereservation(){

        $particuliers = Particuliers::all();
        $reservations = Reservation::orderBy("etatReservation", "asc")->get();

        return view('reservations.liste', compact('reservations', 'particuliers'));
    }

    public function formreservation(){
        return view('reservations.create');
    }


    // ENREGISTRER UNE RESERVATION
    public function store (Request $request){

        $request->validate([
             'particulier_id'                => 'required | max:255',
             'dateReservation'               => 'required | max:10',
             'dateDebut'                     => 'required | max:10',
             'dateFin'                       => 'required | max:10',
             'coutReservation'               => 'required | integer',
             'modele_id'                     => 'required | max:10 | string',
         ]);

         Reservation::create($request->all());

         return redirect()->route('reservations.create')
                          ->with('success', 'Reservation effectué !');
    }
}
