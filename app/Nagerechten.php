<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nagerechten extends Model
{
    protected $fillable = [
        'naam',
        'prijs',
        'ingredienten',     
    ];
}
