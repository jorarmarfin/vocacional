<?php

use App\Models\Catalogo;

if (! function_exists('IdRole')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function IdRole($codigo)
    {
        $role = Catalogo::select('id')->table('ROLES')->where('codigo',$codigo)->first();
        return $role->id;
    }
}