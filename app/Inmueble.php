<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'Inmueble';

    protected $fillable = ['Longitud', 'Latitud', 'Estado', 'Precio', 'MetrosCuadrados', 'Moneda', 'DireccionExacta', 'Referencia', 'DisponibilidadHoraria', 'IdArrendador', 'IdTipoInmueble', 'IdDistrito'];
}
