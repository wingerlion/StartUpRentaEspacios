<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ciudad;

class CiudadController extends Controller
{
    //ajax
    protected function getCiudades($idDepartamento){
    	$data = null;

		try{
			$data = $this->getAllCiudades($idDepartamento);
			//dd($data);
		} catch(\Exception $e) {
			//dd($e);
		}

		return json_encode($data);
    }

    protected function getAllCiudades($idDepartamento){
		return Ciudad::where('IdDepartamento', $idDepartamento)->get();
    }
}
