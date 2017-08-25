<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Departamento;

class DepartamentoController extends Controller
{
    //ajax
    protected function getDepartamentos(){
    	$data = null;

		try{
			$data = $this->getAllDepartamentos();
			//dd($data);
		} catch(\Exception $e) {
			//dd($e);
		}

		return json_encode($data);
    }

    protected function getAllDepartamentos(){
		return Departamento::all();
    }
}
