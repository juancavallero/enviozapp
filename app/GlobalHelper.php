<?php

/**
 * Created by PhpStorm.
 * User: Julio
 * Date: 12/6/2017
 * Time: 14:39
 * Clase para funciones genéricas de uso frecuente
 */

namespace App;

class GlobalHelper
{
    public static function array_to_attributes ( $array_attributes )
    {

        $attributes_str = NULL;
        foreach ( $array_attributes as $attribute => $value )
        {

            $attributes_str .= " $attribute=$value ";

        }

        return $attributes_str;
    }
}