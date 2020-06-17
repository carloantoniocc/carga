<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Storage extends Model
{
    

    protected $fillable = [
        'active', 
    ];

    //public function item()
    //{
    //    return $this->hasOne(Item::class);
    //}

}
