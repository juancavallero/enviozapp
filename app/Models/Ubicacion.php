<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ubicacion
 * @package App\Models
 * @version December 5, 2018, 8:33 pm UTC
 */
class Ubicacion extends Model
{
    use SoftDeletes;

    public $table = 'ubicaciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'latitud',
        'longitud',
        'idUsuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idUsuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'latitud' => 'required|min:3',
        'longitud' => 'required|min:3'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'idUsuario');
    }
}
