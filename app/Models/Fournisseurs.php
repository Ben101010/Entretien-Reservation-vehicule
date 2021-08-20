<?php

namespace App\Models;

use App\Models\PieceDefectueuse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseurs extends Model
{
    use HasFactory;

    public function PieceDefectueuses(){
        return $this->hasMany("PieceDefectueuse::class","piece_defectueuses_id", "id");
    }
}
