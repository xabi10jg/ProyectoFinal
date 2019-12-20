<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new Tipo();
        $tipo->name = 'Hotel';
        $tipo->save();

        $tipo = new Tipo();
        $tipo->name = 'Refugio';
        $tipo->save();

        $tipo = new Tipo();
        $tipo->name = 'Veterinario';
        $tipo->save();

        $tipo = new Tipo();
        $tipo->name = 'Centro Acogida';
        $tipo->save();

        $tipo = new Tipo();
        $tipo->name = 'Protectora';
        $tipo->save();
    }
}
