<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido','direccion','telefono','email', 'password','idCiudad','idRol', 'web', 'imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|min:3|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required',
            'min:8',
            'max:60',
            'confirmed'
        ],
        'idRol' => 'exists:rol,id'
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    public function rol()
    {
        return $this->belongsTo(\App\Models\Rol::class,'idRol');
    }

    /**
     * Comprueba si un usuario tiene determinado rol
     * @param $nombreRoles
     * @return bool
     */
    public function isRol($nombreRoles)
    {
        return $this->rol->slug == $nombreRoles;

    }


}
