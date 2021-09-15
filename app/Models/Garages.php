<?php

namespace App\Models;

use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Garages extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'numeroGarage',
        'adresseGarage',
    ];

    public function maintenances(){
        return $this->hasMany("Maintenance::class","maintenance_id", "id");
    }
}
