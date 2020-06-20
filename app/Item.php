<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id', 
        'name',
        'price',
        'ingredients',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}