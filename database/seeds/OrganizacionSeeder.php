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
        $org->img = '/img/portfolio/lur.jpg';
        $org->tipo_id = $tipo_vet->id;
        $org->encargado_id = 4;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Refugio Andoni';
        $org->email = 'andoniRef@gmail.com';
        $org->CIF = '123456789ZXC';
        $org->img = '/img/portfolio/zuri-thumbnail.jpg';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 6;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Acogida Xabi';
        $org->email = 'xabiAcogida@gmail.com';
        $org->CIF = '123456789QWE';
        $org->img = '/img/portfolio/jaky-thumbnail.jpg';
        $org->tipo_id = $tipo_aco->id;
        $org->encargado_id = 5;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Hotel Miren';
        $org->email = 'mirenHotel@gmail.com';
        $org->CIF = '123456789POI';
        $org->img = '/img/portfolio/doby-thumbnail.jpg';
        $org->tipo_id = $tipo_hotel->id;
        $org->encargado_id = 7;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Protectora Maria';
        $org->email = 'mariaPro@gmail.com';
        $org->CIF = '123456789LKJ';
        $org->img = '/img/portfolio/mast-thumbnail.jpg';
        $org->tipo_id = $tipo_pro->id;
        $org->encargado_id = 8;
        $org->save();
    }
}
