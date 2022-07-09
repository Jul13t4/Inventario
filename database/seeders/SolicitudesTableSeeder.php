<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SolicitudesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('solicitudes')->delete();   
        
    }
}