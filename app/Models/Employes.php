<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telEmploye',
        'cniEmploye',
        'login',
        'password',
    ];

    public function reservations(){
        return $this->hasMany("Reservation::class","reservation_id", "id");
    }

}
