<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Establecimiento extends Model
{
    public function comuna()
    {
        return $this->hasMany('App\Comuna');
    }
	
	public function tipo()
    {
        return $this->hasMany('App\TipoEstab');
    }
	
	/**
     * Funciones para determinar Usuarios asociados a un Establecimiento
     */
	public function users()
    {
        return $this->belongsToMany('App\User');
    }
	
	/**
	 * Funcion que retorna el nombre del establecimiento
	 * @param: id
	 * @return: nombre de establecimiento (string)
	 */
	public function nombreEstablecimiento($id)
	{
		return Establecimiento::select('name')->where('id',$id);
	}


	public static function establecimientosxcomuna($id){
		return Establecimiento::where('comuna_id','=',$id);
	}


	public function establecimiento()
	{
		return $this->hasOne('App\Establecimiento');
	}

}
