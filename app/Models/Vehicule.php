<?php

namespace App\Models;

use App\Models\Modele;
use App\Models\Marques;
use App\Models\Maintenance;
use App\Models\Reservation;
use App\Models\NatureRevision;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicule extends Model
{
    use HasFactory;

    public function marque(){
        return $this->belongsTo("Marques::class","marque_id", "id");
    }

    public function modele(){
        return $this->belongsTo("Modele::class","modele_id", "id");
    }

    public function reservation(){
        return $this->belongsToMany("Reservation::class","ligne_reservations","vehicule_id", "reservation_id")->withPivot('dateDepart',
        'dateArrive', 'kmDepart', 'kmArrive')->withTimestamps();
    }

    public function natureRevision(){
        return $this->belongsToMany("NatureRevision,::class", "est_revisionner", "vehicule_id", "natureRevision_id")->withTimestamps();
    }


    public function maintenances(){
        return $this->hasMany("Maintenance::class","maintenance_id", "id");
    }


    protected $fillable = [
        'immatriculationVehicule',
        'typeTransmission',
        'couleur',
        'energie',
        'marque_id',
        'modele_id',
    ];

}
