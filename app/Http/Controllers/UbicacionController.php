<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUbicacionRequest;
use App\Http\Requests\UpdateUbicacionRequest;
use App\Models\Ubicacion;
use App\Models\User;
use App\Repositories\UbicacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UbicacionController extends AppBaseController
{
    /** @var  UbicacionRepository */
    private $ubicacionRepository;

    public function __construct(UbicacionRepository $ubicacionRepo)
    {
        $this->ubicacionRepository = $ubicacionRepo;
    }

    /**
     * Display a listing of the Ubicacion.
     *
     * @param Request $request
     * @return Response
     */
    public function getUbicacionesUsuario($idUsuario)
    {

        $ubicaciones = Ubicacion::where('idUsuario',$idUsuario)->get();

        return response()->json([
            'ubicaciones' => $ubicaciones,
        ]);
    }

    public function postUbicacionesUsuario($id, Request $request)
    {

        $usuario = User::find($id);

        if (empty($usuario)) {
            return response()->json([
                'danger' => 'El usuario no existe',
            ]);
        }

        $input = $request->all();
        $input['idUsuario'] = $usuario->id;

        $ubicacion = $this->ubicacionRepository->create($input);

        return response()->json([
            'success' => 'Ubicacion Agregada Correctamente',
        ]);

    }


    /**
     * Store a newly created Ubicacion in storage.
     *
     * @param CreateUbicacionRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $ubicacion = $this->ubicacionRepository->create($input);

        Flash::success('Ubicacion creado correctamente.');

        return redirect(route('ubicacions.index'));
    }

    /**
     * Display the specified Ubicacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ubicacion = $this->ubicacionRepository->findWithoutFail($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion no encontrado.');

            return redirect(route('ubicacions.index'));
        }

        return view('ubicacions.show')->with('ubicacion', $ubicacion);
    }


    /**
     * Update the specified Ubicacion in storage.
     *
     * @param  int              $id
     * @param UpdateUbicacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUbicacionRequest $request)
    {
        $ubicacion = Ubicacion::find($id);

        if (empty($ubicacion)) {
            return response()->json([
                'danger' => 'La ubicación no existe',
            ]);
        }

        $ubicacion = $this->ubicacionRepository->update($request->all(), $id);

        return response()->json([
            'success' => 'Ubicacion Actualizada Correctamente',
        ]);
    }

    /**
     * Remove the specified Ubicacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubicacion = $this->ubicacionRepository->findWithoutFail($id);

        if (empty($ubicacion)) {
            return response()->json([
                'danger' => 'La ubicacion no existe',
            ]);
        }

        $this->ubicacionRepository->delete($id);

        return response()->json([
            'success' => 'Ubicacion eliminada correctamente',
        ]);
    }
}
