<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Inmueble;

class InmuebleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'hola';
    }


    public function create()
    {
        return view('crear_inmueble');
    } 

   	public function store(Request $request)
    {
    	//$user = Auth::user()->id;
    	$user = Auth::user();
    	$userId = $user->id;
    	$input = $request->all();

    	//prueba
    	/*
    	$input['longitud'] = 666.6;
        $input['latitud'] = 777.7;
		//$input['fechaInicio'] = '';
		//$input['fechaFin'] = '';
		$input['estado'] = 'asdffgh';
		$input['precio'] = 2000;
		$input['metros'] = 350;
		$input['moneda'] = 'soles';
		$input['direccion'] = 'av. blahh';
		$input['referencia'] = 'refff';
		$input['disponibilidad'] = 'libree';
		$input['tipoInmueble'] = 1;
		$input['distrito'] = 1;
		*/
        return Inmueble::create([
            'Longitud' => $input['longitud'],
            'Latitud' => $input['latitud'],
			//'FechaInicioPublicacion' => $input['fechaInicio'],
			//'FechaFinPublicacion' => $input['fechaFin'],
			'Estado' => $input['estado'],
			'Precio' => $input['precio'],
			'MetrosCuadrados' => $input['metros'],
			'Moneda' => $input['moneda'],
			'DireccionExacta' => $input['direccion'],
			'Referencia' => $input['referencia'],
			'DisponibilidadHoraria' => $input['disponibilidad'],
			'IdArrendador' => $userId,
			'IdTipoInmueble' => $input['tipoInmueble'],
			'IdDistrito' => $input['distrito'],
        ]);
    } 
}
