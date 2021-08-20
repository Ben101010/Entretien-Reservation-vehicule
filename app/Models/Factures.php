<?php

namespace App\Models;

use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factures extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelleFacture',
    ];

    public function maintenances(){
        return $this->hasMany("Maintenance::class","maintenance_id", "id");
    }
}
