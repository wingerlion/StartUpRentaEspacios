<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoInmueble;

class TipoInmuebleController extends Controller
{
    
	//ajax
    protected function getTipoInmuebles(){
    	$data = null;

		try{
			$data = $this->getAllTipoInmuebles();
			//dd($data);
		} catch(\Exception $e) {
			//dd($e);
		}

		return json_encode($data);
    }

    protected function getAllTipoInmuebles(){
		return TipoInmueble::all();
    }
}
