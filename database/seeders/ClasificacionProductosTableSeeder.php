<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClasificacionProductosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clasificacion_productos')->delete();
        
        \DB::table('clasificacion_productos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'producto' => 'MATERIALES DE OFICINA',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            1 => 
            array (
                'id' => 2,
                'producto' => 'ART Y ACC MEDICO-ENFERMERÍA',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            2 => 
            array (
                'id' => 3,
                'producto' => 'ART Y ACC DENTALES',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            3 => 
            array (
                'id' => 4,
                'producto' => 'ART Y ACC LABORATORIO',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            4 => 
            array (
                'id' => 5,
                'producto' => 'EPP',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            5 => 
            array (
                'id' => 6,
                'producto' => 'LIMPIEZA, ASEO Y TOCADOR',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            6 => 
            array (
                'id' => 7,
                'producto' => 'ROPA ACCESORIOS',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
            7 => 
            array (
                'id' => 8,
                'producto' => 'LIBROS, EQUIPO COMPUTO',
                'estado' => 'Activo',
                'estado_1' => 'Inactivo',
            ),
        ));
        
        
    }
}