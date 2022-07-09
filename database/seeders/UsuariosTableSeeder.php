<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usuarios')->delete();
        
        \DB::table('usuarios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Marina',
                'apellido' => 'Mora',
                'cargo' => 'Planta',
                'area' => 'Financiera',
                'correo' => 'nmmoraz@unal.edu.co ',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Carlos',
                'apellido' => 'Barrera',
                'cargo' => 'Planta',
                'area' => 'Aseguramiento',
                'correo' => 'chbarrerav@unal.edu.co ',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Sandra',
                'apellido' => 'Muñoz',
                'cargo' => 'Planta',
                'area' => 'Contratación',
                'correo' => 'smmunozb@unal.edu.co ',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Angela',
                'apellido' => 'Alvarez',
                'cargo' => 'Planta',
                'area' => 'Dirección Nacional',
                'correo' => 'laalvarezb@unal.edu.co ',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Esperanza',
                'apellido' => 'Sierra',
                'cargo' => 'Planta',
                'area' => 'Dirección Bogotá',
                'correo' => 'esierrah@unal.edu.co ',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Sandra',
                'apellido' => 'Rodríguez',
                'cargo' => 'OPS',
                'area' => 'Odontologia',
                'correo' => 'syrodriguezpa@unal.edu.co ',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Ingrid',
                'apellido' => 'Bohorquez',
                'cargo' => 'OPS',
                'area' => 'CTC',
                'correo' => 'igbohorquezr@unal.edu.co ',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Sandra',
                'apellido' => 'Sarmiento',
                'cargo' => 'OPS',
                'area' => 'Jefatura Bogotá',
                'correo' => 'dservsalud@unal.edu.co',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Nati del Pilar',
                'apellido' => 'Vesga',
                'cargo' => 'Planta',
                'area' => 'Enfermería',
                'correo' => 'ndvesgam@unal.edu.co',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Norma',
                'apellido' => 'Cadena',
                'cargo' => 'Planta',
                'area' => 'Afiliaciones',
                'correo' => 'nccadenag@unal.edu.co',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Elsa',
                'apellido' => 'Cruz',
                'cargo' => 'Planta',
                'area' => 'Tesoreria',
                'correo' => 'ecruzgo@unal.edu.co',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Melida',
                'apellido' => 'Castaño',
                'cargo' => 'OPS',
                'area' => 'Atención al usuario',
                'correo' => 'atenusuario_bog@unal.edu.co',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Linda',
                'apellido' => 'Martinez',
                'cargo' => 'Planta',
                'area' => 'Laboratorio',
                'correo' => 'lmartinezgi@unal.edu.co',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Rosa',
                'apellido' => 'Mancera',
                'cargo' => 'Planta',
                'area' => 'Autorizaciones',
                'correo' => 'rimancerap@unal.edu.co',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Mariela',
                'apellido' => 'Amaya',
                'cargo' => 'Planta',
                'area' => 'Financiera',
                'correo' => 'secfinunisa_nal@unal.edu.co',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Bercy',
                'apellido' => 'Reyes',
                'cargo' => 'OPS',
                'area' => 'Aseguramiento',
                'correo' => 'abreyesb@unal.edu.co',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Orlando',
                'apellido' => 'Bohorquez',
                'cargo' => 'Planta',
                'area' => 'Tesoreria',
                'correo' => 'cobohorquezm@unal.edu.co',
            ),
        ));
        
        
    }
}