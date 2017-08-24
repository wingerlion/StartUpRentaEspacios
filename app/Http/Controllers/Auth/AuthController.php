<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DateTime;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $rules = [   
            'apellido' => 'required|max:255|alpha',
            'dni' => 'required|max:255|digits:8', //AQUI HABIA UN PROBLEMA EN LA VALIDACION (LA SOLUCION ES digits)
            'celular' => 'required|max:255|digits:9',
            //'correo' => 'required|max:255',
            'cuenta' => 'required|max:20',
            'banco' => 'required|max:255',
            'cuenta-interbancario' => 'required|max:255',
            'name' => 'required|max:255|alpha',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];

        $messages = [
            'alpha'    => 'El campo solo debe contener letras.',
            'digits'    => 'El campo :attribute debe tener más de :digits dígitos.',
            'numeric'    => 'El campo :attribute debe ser un número.',
            'required'    => 'El campo es obligatorio.',
            'max'   => [
                        'numeric' => 'El campo no debe ser mayor a :max.',
                        'string'  => 'El campo no debe tener más de :max caracteres.',
                    ],
            'min'   => [
                        'numeric' => 'El campo no debe ser menor a :min.',
                        'string'  => 'El campo no debe tener menos de :min caracteres.',
                    ],
            'email' => 'El campo debe ser un correo electrónico válido.',
            'confirmed'     => 'La confirmación de no coincide.',
            'unique'    => 'Este campo ya existe.',
        ];


        $validator = Validator::make($data, $rules, $messages);
        //dd($validator);
        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $today = new DateTime();

        //dd($today);
        return User::create([
            //'Nombre' => $data['name'],
            'Apellido' => $data['apellido'],
            'DNI' => $data['dni'],
            'Celular' => $data['celular'],
            //'Correo' => $data['email'],
            'FechaDeIngreso' => $today,
            'NumeroCuenta' => $data['cuenta'],
            'Banco' => $data['banco'],
            'NumeroCuentaInterbancario' => $data['cuenta-interbancario'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
