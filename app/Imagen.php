<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Imagen extends Model
{
    
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = 'imagen';
     
    protected $fillable = ['IdImagen', 'Ruta', 'IdInmueble'];

     public $timestamps = false;
}
