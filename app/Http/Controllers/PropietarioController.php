<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use DateTime;
use Mail;
use Illuminate\Http\Request;
use App\Propietario;
use App\Ciudad;
use App\Usuario;
use Illuminate\Routing\Controller as BaseController;



class PropietarioController extends BaseController
{

    //use Helpers; no se puede 


        public function getAll()
    {
       $Propietarios = Propietario::get();
       return $this->response->array($Propietarios->toArray());
    }





        public function store( )
    {
        try {
            $Nombres         =   'nombrePropietarioNuevo';
            $Direccion        =   'direccionPropietarioNuevo';
            $CorreoElectronico     =   'correoPropietarioNuevo';
            $DNI     =   'dniPropietarioNuevo';


            $propietario = new Propietario;
            $propietario->Nombres            =   $Nombres;
            $propietario->Direccion              =   $Direccion;
            $propietario->CorreoElectronico     =   $CorreoElectronico;
            $propietario->DNI     =   $DNI;

            $propietario->save();
            
            //return redirect()->route('pspCriterio.index')->with('success', 'El criterio se ha registrado exitosamente');
            return 'Ok' ;


        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta operación');
        }
    }





}