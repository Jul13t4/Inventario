<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;
use App\Models\Usuarios;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class SolicitudesController extends Controller
{
    public function ListadoSolicitudes(Request $request)
    {

        $listSolicitudes = Solicitudes::with('productos')->whereIn('estado',['Activo','Inactivo'])->get();
        return $listSolicitudes;
    }

    public function usuarios()
    {
        $listUsuarios = Usuarios::get();
        return $listUsuarios;  
    } 

    public function guardarData(Request $request)
    {
        // el dd mata el proceso y permite ver que se esta enviando
        // asi vamos a acceder a cada valor del request
        DB::beginTransaction();
        try {
            //code...
            $updateSolicitud = Solicitudes::where('id', $request['id'])->update([
                'codigo' => $request['codigo'],
                'dependencia_soli' => $request['dependencia_soli'],
                'cantidad_soli' => $request['cantidad_soli'],
                'recibido_por' => $request['recibido_por'],
                'estado' => $request['estado']
            ]);
            DB::commit();
             return response()->json(true, 200);
        } catch (\Exception $ex) {
            DB::rollBack();
            $data['respuesta'] = [
                'codigo' => 500,
                'error' => $ex->getMessage(),
                'line' => $ex->getLine()
            ];
            return response()->json($data, 500); //así respondemos en http por si sale error
        }
    }

    public function insertarData(Request $request)
    {
         // el dd mata el proceso y permite ver que se esta enviando
        // asi vamos a acceder a cada valor del request
        DB::beginTransaction();
        try {
            //code...
            $updateSolicitud = Solicitudes::create([
                'id_usuario' => $request['id_usuario'],
                'codigo' => $request['codigo'],
                'dependencia_soli' => $request['dependencia_soli'],
                'cantidad_soli' => $request['cantidad_soli'] != null ? $request['cantidad_soli']: 0,
                'cantidad_entre' => $request['cantidad_entre'] != null ? $request['cantidad_entre'] : 0,
                'recibido_por' => $request['recibido_por'],
                'estado' => $request['estado']
            ]);
            DB::commit();
             return response()->json(true, 200);
        } catch (\Exception $ex) {
            DB::rollBack();
            $data['respuesta'] = [
                'codigo' => 500,
                'error' => $ex->getMessage(),
                'line' => $ex->getLine()
            ];
            return response()->json($data, 500); //así respondemos en http por si sale error  :)
        }
    }

    
    

    public function productos(Request $request)
    {
        $listProduct = Producto::with('producto')->whereIn('estado',['Activo','Inactivo'])->get();
        return $listProduct;
    }
}
