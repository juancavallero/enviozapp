<?php

namespace App\Repositories;

use App\Models\Ubicacion;
use InfyOm\Generator\Common\BaseRepository;

class UbicacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'latitud',
        'longitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ubicacion::class;
    }
}
