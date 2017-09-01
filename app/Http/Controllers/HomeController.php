<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Imagen;
use App\Inmueble;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcomeHome()
    {

        
        $imagenes = Imagen::all();
        $cantidadImagenes = count($imagenes); //modificar esto ya que solo deberia mostrar la principal
        $arregloImagenes = [];
        for ($i = $cantidadImagenes - 3 ; $i < $cantidadImagenes; $i++){
            array_push($arregloImagenes,$imagenes[$i]);            
        }
                   
        return view('welcome', compact('arregloImagenes'));
    }
}
