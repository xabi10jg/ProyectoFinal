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
        $role = new Role();
        $role->rol = 'Estandar';
        $role->save();

        $role = new Role();
        $role->rol = 'Encargado';
        $role->save();

        $role = new Role();
        $role->rol = 'Administrador';
        $role->save();
    }
}
