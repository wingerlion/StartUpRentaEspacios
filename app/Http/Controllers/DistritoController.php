<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Distrito;

class DistritoController extends Controller
{
    //ajax
    protected function getDistritos($idCiudad){
    	$data = null;

		try{
			$data = $this->getAllDistritos($idCiudad);
			//dd($data);
		} catch(\Exception $e) {
			//dd($e);
		}

		return json_encode($data);
    }

    protected function getAllDistritos($idCiudad){
		return Distrito::where('IdCiudad', $idCiudad)->get();
    }
}
