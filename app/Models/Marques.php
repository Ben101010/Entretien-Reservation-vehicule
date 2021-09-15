<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicule;
class Marques extends Model
{
    use HasFactory;

    protected $table = "Marques";

    public $timestamps = true;

    //protected $fillable = [
       /* 'libelleMarque',
       'timestamps'
    ];*/

    public function vehicules(){
        return $this->hasMany("Vehicule::class","vehicule_id", "id");
    }

}
