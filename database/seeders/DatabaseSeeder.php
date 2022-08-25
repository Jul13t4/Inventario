<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsuariosTableSeeder::class);
        $this->call(SolicitudesTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(ClasificacionProductosTableSeeder::class);

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password = 'admin1234';
        $user->role = 'admin';

        $user->save();
    }
}
