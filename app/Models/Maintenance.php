<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public function grge(){
        return $this->belongsTo("Garage::class","garage_id", "id");
    }

    public function vhcle(){
        return $this->belongsTo("Vehicule::class","vehicule_id", "id");
    }
}
