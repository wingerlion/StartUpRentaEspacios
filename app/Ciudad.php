<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

	protected $table = 'ciudad';
    
    protected $fillable = [
        	'Descripcion', 
    ];

    public $timestamps = false;
}
