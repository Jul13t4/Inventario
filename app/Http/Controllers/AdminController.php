<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class AdminController extends Controller
{

    public function index()
    {

        return 'Admin';
    }

    /**
     * Vamos a crrearla funcion para mostrar la data
     * 
     * ok la funcion y la ruta 
     */

    public function showProducts()
    {
        $producto = Producto::with('clasificacion')->get();
        // return $producto;
        $newArrProduct = [];
        $letters = array_merge(range('a','z'),range('A','Z'));
        foreach ($producto as $key => $value) {
            # code...
            array_push($newArrProduct, (object)[
                'id' => $value->id,
                'title' => $value->elemento,
                'category' => [$value->clasificacion->producto],
                'tag' => 'tag-one', 'tag-one', 'tag-four',
                'price' => rand(2,50),
                'rating' => rand(1,5),
                'check' => 'check-'.$letters[rand(0,51)],
                'radio' => 'radio-'.$letters[rand(0,51)]
            ]);
        }
        return $newArrProduct;
      

    }
}
