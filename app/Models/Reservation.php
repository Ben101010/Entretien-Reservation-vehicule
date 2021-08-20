<?php

namespace App\Models;

use App\Models\Employes;
use App\Models\Vehicule;
use App\Models\Chauffeurs;
use App\Models\Entreprises;
use App\Models\Particuliers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    public function emply(){
        return $this->belongsTo("Employes::class","employe_id", "id");
    }

    public function chffr(){
        return $this->belongsTo("Chauffeurs::class","chauffeur_id", "id");
    }

    public function prtclier(){
        return $this->belongsTo("Particuliers::class","particulier_id", "id");
    }

    public function entrprse(){
        return $this->belongsTo("Entreprises::class","entreprise_id", "id");
    }

    public function vehicules(){
        return $this->belongsToMany("Vehicule::class","ligne_reservations", "reservation_id", "vehicule_id")->withPivot('dateDepart',
        'dateArrive', 'kmDepart', 'kmArrive')->withTimestamps();
    }
}
