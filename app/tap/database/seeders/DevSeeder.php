<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aut_usuario')->insert([
            ['nombre'=>'Usuario 01', 'apellido'=>'Apeelido 01', 'correo'=>'admin@localhost', 'telefono'=>'+51999666333', 'password'=>bcrypt('admin')]
        ]);
        //
    }
}
