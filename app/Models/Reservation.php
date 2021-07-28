<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function emply(){
        return $this->belongsTo("Employe::class","employe_id", "id");
    }

    public function chffr(){
        return $this->belongsTo("Chauffeur::class","chauffeur_id", "id");
    }

    public function prtclier(){
        return $this->belongsTo("Particulier::class","particulier_id", "id");
    }

    public function entrprse(){
        return $this->belongsTo("Entreprise::class","entreprise_id", "id");
    }

    public function vehicules(){
        return $this->belongsToMany("vehicule::class","ligne_reservations", "reservation_id", "vehicule_id")->withPivot('dateDepart',
        'dateArrive', 'kmDepart', 'kmArrive')->withTimestamps();
    }
}
