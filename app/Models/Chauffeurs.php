<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chauffeurs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telChauffeur',
        'cniChauffeur',
    ];

    public function reservations(){
        return $this->hasMany("Reservation::class","reservation_id", "id");
    }

}
