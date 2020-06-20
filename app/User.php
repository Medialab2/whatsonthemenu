<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','firstname', 'lastname', 'phonenumber', 'restaurant_name', 'address', 'postalcode', 'region', 'phonenumber-rest', 'chamber-of-commerce', 'checkbox-1', 'checkbox-2', 'checkbox-3', 'checkbox-4', 'checkbox-5'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function item()
    {
        return $this->hasMany('Items::class');
    }
}