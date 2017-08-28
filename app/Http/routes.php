<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('blog_single', function () {
    return view('blog_single');
});

Route::get('buy', function () {
    return view('buy');
});

Route::get('busqueda', function () {
    return view('busquedaSpace');
});

Route::get('buy_single', function () {
    return view('buy_single');
});

Route::get('career', function () {
    return view('career');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('dealers', function () {
    return view('dealers');
});

Route::get('faqs', function () {
    return view('faq');
});

Route::get('loan', function () {
    return view('loan');
});

Route::get('loan_single', function () {
    return view('loan_single');
});

/*
Route::get('login', function () {
    return view('login');
});
*/

Route::get('mobile_app', function () {
    return view('mobile_app');
});


Route::get('privacy', function () {
    return view('privacy');
});

/*
Route::get('register', function () {
    return view('register');
});
*/

Route::get('privacy', function () {
    return view('privacy');
});


Route::get('single', function () {
    return view('single');
});


Route::get('suggestion', function () {
    return view('suggestion');
});


Route::get('terms', function () { 
    return view('terms');
});

Route::get('typo', function () {
    return view('typo');
});


Route::get('feedback', function () {
    return view('feedback');
});


Route::get('publicar', function () {
    return view('publicar');
});



Route::get('buscar', function () {
    return view('busquedaSpace');
});

Route::get('pruebas', function () {
    return view('pruebas');
});



//Route::post('register', array('uses' => 'PropietarioController@store'));


Route::get('facebook', 'Auth\AccountFBController@facebook_redirect');
Route::get('callback', 'Auth\AccountFBController@handleProviderCallback');

Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('/home', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('/inmuebles', 'InmuebleController@index'); // ver todos los inmuebles publicados
Route::get('/misInmuebles', 'InmuebleController@inmueblesArrendador'); // ver todos los inmuebles publicados
Route::get('/inmueble/create', 'InmuebleController@create');
Route::post('/inmueble', 'InmuebleController@store');


//publicaciones
Route::get('/buscar', ['as' => 'buscar', 'uses' => 'PublicacionController@indexExternal']);
Route::get('/getLongLatAll', ['as' => 'buscar', 'uses' => 'PublicacionController@getLongLatAll']);

//Route::get('/buscar', 'PublicacionController@indexExternal');
/*
Route::get('buscar', function () {
    return view('busquedaSpace');
});
*/

//ajax routes
Route::get('/getTipoInmuebles', 'TipoInmuebleController@getTipoInmuebles');
Route::get('/getDepartamentos', 'DepartamentoController@getDepartamentos');
Route::get('/getCiudades/{idDepartamento}', 'CiudadController@getCiudades');
Route::get('/getDistritos/{idCiudad}', 'DistritoController@getDistritos');

Route::get('/upload', 'InmuebleController@upload');

