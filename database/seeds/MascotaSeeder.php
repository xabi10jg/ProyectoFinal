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
        $mascota->tipo = "Perro";
        $mascota->propietario = 4;
        $mascota->img = '/img/portfolio/lur.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Doby';
        $mascota->fecha_nacimiento = "2018-10-20";
        $mascota->raza = "Doberman";
        $mascota->tipo = "Perro";
        $mascota->propietario = 7;
        $mascota->img = '/img/portfolio/doby.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Bort';
        $mascota->fecha_nacimiento = "2018-03-09";
        $mascota->raza = "Husky Siberiano";
        $mascota->tipo = "Perro";
        $mascota->propietario = 8;
        $mascota->img = '/img/portfolio/Bort.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Simba';
        $mascota->fecha_nacimiento = "2016-10-20";
        $mascota->raza = "Van Turco";
        $mascota->tipo = "Gato";
        $mascota->organizacion_id = 2;
        $mascota->img = 'img/portfolio/simba.jpg';
        $mascota->save();

        $mascota = new Mascota();
        $mascota->name = 'Arslan';
        $mascota->fecha_nacimiento = "2017-10-20";
        $mascota->raza = "Maine Coon";
        $mascota->tipo = "Gato";
        $mascota->organizacion_id = 2;
        $mascota->img = 'img/portfolio/arslan.jpg';
        $mascota->save();
    }
}
