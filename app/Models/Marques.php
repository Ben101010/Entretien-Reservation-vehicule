<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marques extends Model
{
    use HasFactory;

    protected $table = "Marques";

    public $timestamps = true;

    //protected $fillable = [
       /* 'libelleMarque',
       'timestamps'
    ];*/

}
