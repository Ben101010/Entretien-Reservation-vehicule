<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprises extends Model
{
    use HasFactory;

    protected $fillable = [
        'designEntreprise',
        'localEntreprise',
        'nccEntreprise',
        'emailEntreprise',
        'telEntreprise1',
        'telEntreprise2',
    ];

    public function reservations(){
        return $this->hasMany("Reservation::class","reservation_id", "id");
    }
}
