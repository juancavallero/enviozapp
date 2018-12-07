<?php

namespace App\Http\Controllers;


use App\Models\Ubicacion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\Helpers\EmailHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;


class HomeController extends Controller
{
    private $usuarioRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', compact('links'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function homeweb()
    {
        $ubicaciones = Ubicacion::all();
        $usuarios = User::all()->pluck('nombre','id');
        $usuarios->prepend('Todos los Usuarios',0);

        return view('web/home', compact('ubicaciones','usuarios'));
    }

    public function getUbicacionesUser(Request $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($request->usuario);

        if ($usuario) {
            $ubicaciones = Ubicacion::where('idUsuario',$request->usuario)->get();
        }else{
            $ubicaciones = Ubicacion::all();
        }

        $usuarios = User::all()->pluck('nombre','id');
        $usuarios->prepend('Todos los Usuarios',0);

        return view('web/home', compact('ubicaciones','usuarios'));

    }


}
