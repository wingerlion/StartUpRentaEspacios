<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Inmueble;
use DateTime;

class InmuebleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $inmuebles = Distrito::where('IdCiudad', $idCiudad)->get();
        return view('hola');
    }

    public function inmueblesArrendador()
    {
        $user = Auth::user();
        $userId = $user->id;

        $inmuebles = Inmueble::where('IdArrendador', $userId)->get();
        return view('hola');
    }

    public function create()
    {
        //return view('crear_inmueble');
        return view('publicar');
    } 

   	public function store(Request $request)
    {
        /*
        $this->validate($request, [
            //'longitud' => 'required',
            //'latitud' => 'required',
            'estado' => 'required',
            'precio' => 'required',
            'metros' => 'required',
            'moneda' => 'required',
            'direccion' => 'required',
            'referencia' => 'required',
            'disponibilidad' => 'required',
        ]);
        */

    	$user = Auth::user();
    	$userId = $user->id;
    	$input = $request->all();

        $fechaI = DateTime::createFromFormat('d-m-Y', $input['fecha-inicio']);
        $fechaF = DateTime::createFromFormat('d-m-Y', $input['fecha-fin']);

        $obj = [
            'Longitud' => $input['longitud'],
            'Latitud' => $input['latitud'],
            'FechaInicioPublicacion' => $fechaI,
            'FechaFinPublicacion' => $fechaF,
            'Estado' => $input['estado'],
            'Precio' => floatval($input['precio']),
            'MetrosCuadrados' => floatval($input['metros']),
            'Moneda' => $input['moneda-list'],
            'DireccionExacta' => $input['direccion'],
            'Referencia' => $input['referencia'],
            'DisponibilidadHoraria' => $input['horario'],
            'IdArrendador' => $userId,
            'IdTipoInmueble' => $input['inmueble-list'],
            'IdDistrito' => $input['distrito-list'],
        ];

        //dd($obj);
        $inmueble = Inmueble::create($obj);

     //   return redirect()->route('home.index')->with('success', "Se publicó el inmueble exitosamente.");   
        return view('dashboard');
    } 
}
