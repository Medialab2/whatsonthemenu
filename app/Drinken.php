<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinken extends Model
{
    protected $fillable = [
        'naam',
        'prijs',
        'ingredienten',     
    ];
}