<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;
use App\Mascota;

class RefugioController extends Controller
{
    public function index()
    {
        $refugios = Organizacion::where('tipo_id',2)->get();
        return view('organizaciones.refugios',['refugios' => $refugios]);
    }
    
    public function show($id)
    {   
        $mascotas = Mascota::where('organizacion_id',$id)->get();
        $refugio = Organizacion::find($id);
        return view ('organizaciones.refugio',array('refugio'=>$refugio, 'mascotas'=>$mascotas));
    }
}
