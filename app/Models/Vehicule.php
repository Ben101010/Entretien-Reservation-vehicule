<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    public function mrqe(){
        return $this->belongsTo("Marque::class","marque_id", "id");
    }

    public function mdle(){
        return $this->belongsTo("Modele::class","modele_id", "id");
    }

    public function reservations(){
        return $this->belongsToMany("reservation::class","ligne_reservations","vehicule_id", "reservation_id")->withPivot('dateDepart',
        'dateArrive', 'kmDepart', 'kmArrive')->withTimestamps();
    }

    public function natureRevisions(){
        return $this->belongsToMany("natureRevision,::class", "est_revisionner", "vehicule_id", "natureRevision_id")->withTimestamps();
    }

}
