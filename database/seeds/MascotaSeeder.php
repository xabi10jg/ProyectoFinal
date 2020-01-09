<?php

use Illuminate\Database\Seeder;
use App\Mascota;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mascota = new Mascota();
        $mascota->name = 'Lur';
        $mascota->fecha_nacimiento = "2018-12-20";
        $mascota->raza = "Border Collie";
        $mascota->propietario = 4;
        $mascota->img = '/img/portfolio/lur.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Doby';
        $mascota->fecha_nacimiento = "2018-10-20";
        $mascota->raza = "Doberman";
        $mascota->propietario = 7;
        $mascota->img = '/img/portfolio/doby.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Bort';
        $mascota->fecha_nacimiento = "2018-03-09";
        $mascota->raza = "Husky Siberiano";
        $mascota->propietario = 8;
        $mascota->img = '/img/portfolio/Bort.jpg';
        $mascota->save();
    }
}
