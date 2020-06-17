<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Upload extends Model
{

    protected $fillable = [
    	'id','codigo','filename','filenamestorage','iduser',
    ];	


   

}
