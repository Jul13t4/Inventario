<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class AdminController extends Controller {
    
    public function index() {

        return 'Admin';
    }

    /**
     * Vamos a crrearla funcion para mostrar la data
     * 
     * ok la funcion y la ruta 
     */

     public function showProducts()
     {
        return Producto::get();
     }
}