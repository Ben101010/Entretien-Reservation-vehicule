<?php

namespace App\Models;

use App\Models\Maintenance;
use App\Models\Fournisseurs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PieceDefectueuses extends Model
{
    use HasFactory;

    public function frnssr(){
        return $this->belongsTo(Fournisseurs::class,"fournisseur_id", "id");
    }

    public function mtnce(){
        return $this->belongsTo(Maintenance::class,"maintenance_id", "id");
    }

    protected $fillable = [
        'libellePiece',
        'fournisseur_id',
        'maintenance_id',
    ];
}
