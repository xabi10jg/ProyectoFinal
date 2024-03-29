<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
Use \Carbon\Carbon;

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
        $time = Carbon::now()->setTimezone('Europe/Madrid');

        $user = new User();
        $user->name = 'Estandar';
        $user->email = 'estandar@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_estandar->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Encargado';
        $user->email = 'encargado@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'administrador@gmail.com';
        $user->password = bcrypt('admin123');
        $user->role_id = $role_administrador->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Jon';
        $user->email = 'valdes@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Xabi';
        $user->email = 'Xabi@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Andoni';
        $user->email = 'Andoni@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Miren';
        $user->email = 'miren@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Maria';
        $user->email = 'maria@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Patxi';
        $user->email = 'patxi@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

        $user = new User();
        $user->name = 'Ander';
        $user->email = 'Ander@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role_id = $role_encargado->id;
        $user->email_verified_at = $time->toDateTimeString();
        $user->save();

    }
}
