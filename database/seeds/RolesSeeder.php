<?php

use Illuminate\Database\Seeder;

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
            'rol' => "Administrador",
        ]);
        DB::table('roles')->insert([
            'rol' => "SuperAdministrador",
        ]);
    }
}
