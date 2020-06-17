<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    //
	/**
     * Funciones para determinar Usuarios asociados a un Rol
     */
	public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
