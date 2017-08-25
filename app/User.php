<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    protected $table = 'arrendador'; /* tabla adaptada de migrar la tabla users */
    public $timestamps = false; // false: para no necesitar campos updated_at, created_at

    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'dni', 'cellphone', 'admission', 'bank_account', 'bank', 'inter_bank_account',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
