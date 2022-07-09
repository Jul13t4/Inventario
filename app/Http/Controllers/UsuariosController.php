<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller

{
    /**
     * Funcion para cargar usuarios 
     */
    public function ListadoUsuarios()
    {
        $getUsuarios = Usuarios::get(); 
        return $getUsuarios;
    }
}
