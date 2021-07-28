<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureRevision extends Model
{
    use HasFactory;

    public function vehicules(){
        return $this->belongsToMany("Vehicule::class", "est_revisionner", "natureRevision_id", "vehicule_id")->withTimestamps();
    }
}
