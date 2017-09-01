<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Inmueble;
use DateTime;
use Image;
use App\Imagen;

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


   
    public function upload(Request $request)
    {
       
        $ids = $request->input('ids');
return  $ids ;

        $carpetaAdjunta="imagenes_/";
// Contar envían por el plugin
$Imagenes =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);
$infoImagenesSubidas = array();
for($i = 0; $i < $Imagenes; $i++) {
    // El nombre y nombre temporal del archivo que vamos para adjuntar
    $nombreArchivo=isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;
    $nombreTemporal=isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;
    
    $rutaArchivo=$carpetaAdjunta.$nombreArchivo;
    
    move_uploaded_file($nombreTemporal,$rutaArchivo);
    
    $infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","url"=>"borrar.php","key"=>$nombreArchivo);
    $ImagenesSubidas[$i]="<img  height='120px'  src='$rutaArchivo' class='file-preview-image'>";
    }
$arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,
             "initialPreview"=>$ImagenesSubidas);
echo json_encode($arr);



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

        //dd($request);

    	$user = Auth::user();
    	$userId = $user->id;
    	$input = $request->all();

        $fechaI = DateTime::createFromFormat('d-m-Y', $input['fecha-inicio']);
        $fechaF = DateTime::createFromFormat('d-m-Y', $input['fecha-fin']);

        $obj = [
            'Longitud' => $input['latitud'],
            'Latitud' => $input['longitud'],
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

        $inmueble = Inmueble::create($obj);

        // imagenes
        $path = 'uploads/inmuebles/'; //carpeta en la que se guardan las imagenes
        $filename = null;

        if($request->hasFile('images')){

            $files = $request->file('images');
            foreach ($files as $image) {
                /* procesar imagen */
                $filename = $image->getClientOriginalName();
                //$location = storage_path('app/'.$filename); // carpeta storage
                $location = public_path($path.$filename);
                //Image::make($image)->resize(800,400)->save($location);
                Image::make($image)->save($location);

                $filename = $path.$filename;

                /* guardar en bd */
                $imag = new Imagen; 
                $imag->Ruta = $filename;
                $imag->IdInmueble = $inmueble->id;
                $imag->save();
            }
        }

     //   return redirect()->route('home.index')->with('success', "Se publicó el inmueble exitosamente.");   
        return view('dashboard');
    } 
}
