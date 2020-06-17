<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = [
    	'codigo', 'name', 'rural', 'active'
    ];


}
