<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'arrendador';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'email', 'password','Nombre', 'Apellido', 'DNI', 'Celular', 'Correo', 'FechaDeIngreso', 'NumeroCuenta', 'Banco', 'NumeroCuentaInterbancario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    //public $timestamps = false;
}
