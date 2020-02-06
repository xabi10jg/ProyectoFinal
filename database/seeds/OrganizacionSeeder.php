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
        $org->direccion = 'Beraun Kalea';
        $org->provincia = 'Guipuzcoa';
        $org->telefono = '675125676';
        $org->CIF = '123456789ASD';
        $org->horarioApertura = '08:00:00';
        $org->horarioCierre = '20:00:00';
        $org->img = 'https://i.imgur.com/uMiST20.jpg';
        $org->tipo_id = $tipo_vet->id;
        $org->encargado_id = 4;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Refugio Andoni';
        $org->email = 'andoniRef@gmail.com';
        $org->direccion = 'Toki Alai';
        $org->provincia = 'Guipuzcoa';
        $org->telefono = '788235448';
        $org->CIF = '123456789ZXC';
        $org->horarioApertura = '08:00:00';
        $org->horarioCierre = '20:00:00';
        $org->img = 'https://i.imgur.com/Tvvgibr.png';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 6;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Acogida Xabi';
        $org->email = 'xabiAcogida@gmail.com';
        $org->direccion = 'Calle Alaberga';
        $org->provincia = 'Guipuzcoa';
        $org->telefono = '799222316';
        $org->CIF = '123456789QWE';
        $org->horarioApertura = '08:00:00';
        $org->horarioCierre = '20:00:00';
        $org->img = 'https://i.imgur.com/Sa5mT4f.png';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 5;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Hotel Miren';
        $org->email = 'mirenHotel@gmail.com';
        $org->direccion = 'Vallecas';
        $org->provincia = 'Madrid';
        $org->telefono = ' 633236466';
        $org->CIF = '123456789POI';
        $org->horarioApertura = '08:00:00';
        $org->horarioCierre = '20:00:00';
        $org->img = 'https://i.imgur.com/39DLbTh.png';
        $org->tipo_id = $tipo_hotel->id;
        $org->encargado_id = 7;
        $org->save();

        $org = new Organizacion();
        $org->name = 'Protectora Maria';
        $org->email = 'mariaPro@gmail.com';
        $org->CIF = '123456789LKJ';
        $org->horarioApertura = '08:00:00';
        $org->horarioCierre = '20:00:00';
        $org->img = 'https://i.imgur.com/rGCpD7X.jpg';
        $org->direccion = 'Las Ramblas';
        $org->provincia = 'Barcelona';
        $org->telefono = '635652355';
        $org->tipo_id = $tipo_ref->id;
        $org->encargado_id = 8;
        $org->save();
    }
}
