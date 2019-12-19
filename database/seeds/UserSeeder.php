<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 5)->create();
        $role_estandar = Role::where('rol', 'Estandar')->first();
        $role_encargado = Role::where('rol', 'Encargado')->first();
        $role_administrador = Role::where('rol', 'Administrador')->first();

        $user = new User();
        $user->name = 'Estandar';
        $user->email = 'estandar@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_estandar->id;
        $user->save();

        $user = new User();
        $user->name = 'Encargado';
        $user->email = 'encargado@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->save();

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'administrador@gmail.com';
        $user->password = bcrypt('admin123');
        $user->role_id = $role_administrador->id;
        $user->save();

    }
}
