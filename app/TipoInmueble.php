<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInmueble extends Model
{
    protected $table = 'tipoinmueble';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        	'Descripcion', 
    ];

    public $timestamps = false;
}
