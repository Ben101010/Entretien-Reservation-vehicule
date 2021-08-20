<?php

namespace App\Models;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NatureRevision extends Model
{
    use HasFactory;

    public function vehicules(){
        return $this->belongsToMany("Vehicule::class", "est_revisionner", "natureRevision_id", "vehicule_id")->withTimestamps();
    }
}
