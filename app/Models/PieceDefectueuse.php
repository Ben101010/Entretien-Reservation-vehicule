<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceDefectueuse extends Model
{
    use HasFactory;

    public function frnssr(){
        return $this->belongsTo("Fournisseur::class","fournisseur_id", "id");
    }

    public function mtnce(){
        return $this->belongsTo("Maintenance::class","maintenance_id", "id");
    }
}
