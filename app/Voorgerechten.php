<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voorgerechten extends Model
{
    protected $fillable = [
        'naam',
        'prijs',
        'ingredienten',     
    ];
}
