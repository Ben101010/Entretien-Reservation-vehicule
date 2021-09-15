<?php

namespace App\Models;

use App\Models\Garages;
use App\Models\Vehicule;
use App\Models\PieceDefectueuse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maintenance extends Model
{
    use HasFactory;

    public function grge(){
        return $this->belongsTo(Garages::class,"garage_id", "id");
    }

    public function vhcle(){
        return $this->belongsTo(Vehicule::class,"vehicule_id", "id");
    }

    public function facture(){
        return $this->belongsTo(Facture::class,"facture_id", "id");
    }

    public function piecedefectueuses(){
        return $this->hasMany(PieceDefectueuse::class,"piece_defectueuses_id", "id");
    }


    protected $fillable = [
        'libelleMaintenance',
        'garage_id',
        'vehicule_id',
    ];
}
