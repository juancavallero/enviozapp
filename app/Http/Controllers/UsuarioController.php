<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Rol;
use App\Models\User;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsuarioController extends AppBaseController
{
    /** @var  ProvinciaRepository */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuarioRepository->pushCriteria(new RequestCriteria($request));
        $usuarios = User::all();


        return response()->json([
            'usuarios' => $usuarios,
        ]);

    }


    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $this->usuarioRepository->create($input);

        return response()->json([
            'success' => 'Persona Agregada Correctamente',
        ]);

    }

    /**
     * Display the specified Provincia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            return response()->json([
                'danger' => 'El usuario no existe',
            ]);
        }

        return response()->json([
            'usuario' => $usuario,
        ]);
    }


    /**
     * Update the specified Provincia in storage.
     *
     * @param  int              $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            return response()->json([
                'danger' => 'El usuario no existe',
            ]);
        }

        $usuario = $this->usuarioRepository->update($request->all(), $id);

        return response()->json([
            'success' => 'Usuario actualizado correctamente',
        ]);
    }

    /**
     * Remove the specified Provincia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            return response()->json([
                'danger' => 'El usuario no existe',
            ]);
        }

        $this->usuarioRepository->delete($id);

        return response()->json([
            'success' => 'Usuario eliminado correctamente',
        ]);
    }

}
