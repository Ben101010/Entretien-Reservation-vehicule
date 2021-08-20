<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function affichereservation(){

        $reservations = Reservation::orderBy("etatReservation", "asc")->get();

        return view('reservations.liste', compact("reservations"));
    }

    public function formreservation(){
        return view('reservations.create');
    }
}
