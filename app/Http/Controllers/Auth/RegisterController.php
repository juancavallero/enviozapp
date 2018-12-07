<?php

namespace App\Http\Controllers\Auth;

use App\Models\Ciudad;
use App\Repositories\CiudadRepository;
use App\Repositories\ProvinciaRepository;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    private $ciudadRepository;
    private $provinciaRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CiudadRepository $ciudadRepo, ProvinciaRepository $provinciaRepo)
    {
        $this->ciudadRepository=$ciudadRepo;
        $this->provinciaRepository=$provinciaRepo;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'idCiudad' => $data['idCiudad'],
            'idRol'=>3, //TODO: Ver con Juan, me parece que habria que crear un rol 4 para particulares
            'password' => bcrypt($data['password']),
        ]);
    }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        //$ciudades=$this->ciudadRepository->all();
        $provincias=$this->provinciaRepository->pluck('nombre','id');

        return view('auth.register')->with(['provincias'=>$provincias]);
    }

}
