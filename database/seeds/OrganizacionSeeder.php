<?php

use Illuminate\Database\Seeder;
use App\Tipo;
use App\Organizacion;

class OrganizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tipo_vet = Tipo::where('name', 'Veterinario')->first();
        $tipo_hotel = Tipo::where('name', 'Hotel')->first();
        $tipo_pro = Tipo::where('name', 'Protectora')->first();
        $tipo_ref = Tipo::where('name', 'Refugio')->first();
        $tipo_aco = Tipo::where('name', 'Centro Acogida')->first();

        $org = new Organizacion();
        $org->name = 'Veterinaria Valdes';
        $org->email = 'valdesVet@gmail.com';
        $org->CIF = '123456789ASD';
        $org->img = 'https://i.imgur.com/uMiST20.jpg';
        $org->tipo_id = $tipo_vet->id;
        $org->encargado_id = 4;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Refugio Andoni';
        $org->email = 'andoniRef@gmail.com';
        $org->CIF = '123456789ZXC';
        $org->img = 'https://i.imgur.com/Tvvgibr.png';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 6;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Acogida Xabi';
        $org->email = 'xabiAcogida@gmail.com';
        $org->CIF = '123456789QWE';
        $org->img = 'https://i.imgur.com/Sa5mT4f.png';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 5;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Hotel Miren';
        $org->email = 'mirenHotel@gmail.com';
        $org->CIF = '123456789POI';
        $org->img = 'https://i.imgur.com/39DLbTh.png';
        $org->tipo_id = $tipo_hotel->id;
        $org->encargado_id = 7;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Protectora Maria';
        $org->email = 'mariaPro@gmail.com';
        $org->CIF = '123456789LKJ';
        $org->img = 'https://i.imgur.com/rGCpD7X.jpg';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 8;
        $org->save();
    }
}
