<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoofdgerechten extends Model
{
    protected $fillable = [
        'naam',
        'prijs',
        'ingredienten',     
    ];
}
