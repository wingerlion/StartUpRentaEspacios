<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Imagen;
use App\Inmueble;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function indexExternal()
    {



        $inmuebles = Inmueble::all();
        $infoImagenes = array();
        foreach ($inmuebles as $inmueble){

            $imagen = new Imagen;            
            $imagen['Longitud'] = $inmueble['Longitud'];
            $imagen['Latitud'] = $inmueble['Latitud'];
            $inmuebleInfo = Imagen::where('IdInmueble',  $inmueble['IdInmueble'] )->first() ;            
            $imagen['Ruta'] = $inmuebleInfo['Ruta'];
            array_push($infoImagenes,$imagen);
        }

        
        return view('busquedaSpace', compact('infoImagenes'));

        
     
        /*
        $infoImagenes = Imagen::all();
        foreach ($infoImagenes  as $imagen){

            $inmuebleInfo = Inmueble::where('IdInmueble',  $imagen['IdInmueble'] )->first() ;    
            $imagen['Longitud'] = $inmuebleInfo['Longitud'];
            $imagen['Latitud'] = $inmuebleInfo['Latitud'];
            
        }
        var_dump($infoImagenes);
        
        return view('busquedaSpace', compact('infoImagenes'));

        */
    
   
 

        $inmuebles = Inmueble::all();
        $infoImagenes = array();
        foreach ($inmuebles as $inmueble){
            
            $imagen['Longitud'] = $inmueble['Longitud'];
            $imagen['Latitud'] = $inmueble['Latitud'];
            $inmuebleInfo = Imagen::where('IdInmueble',  $inmueble['IdInmueble'] )->first() ;            
            $imagen['Ruta'] = $inmuebleInfo['Ruta'];
            array_push($infoImagenes,$imagen);
        }
     

        return view('busquedaSpace', compact('infoImagenes'));
        
    }

    public function getLongLatAll(){
       

        $nuevoArray = [];
        $inmuebles = Inmueble::all();
        foreach ($inmuebles as $inmueble){

            $valor['Longitud'] = $inmueble['Longitud'];
            $valor['Latitud'] = $inmueble['Latitud'];
            array_push($nuevoArray,$valor);
        }
        
        return $nuevoArray;

    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
