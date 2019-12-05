<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'rol' => "Estandar",
        ]);
        DB::table('roles')->insert([
            'rol' => "Encargado",
        ]);
        DB::table('roles')->insert([
            'rol' => "Administrador",
        ]);
    }
}
