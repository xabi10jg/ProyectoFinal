<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class OrganizacionesController extends Controller
{
    public function index()
    {
        $hoteles = Organizacion::where('tipo_id',1)->get();
        $refugios = Organizacion::where('tipo_id',2)->get();
        $veterinarios = Organizacion::where('tipo_id',3)->get();
        return view('organizaciones', ['hoteles' => $hoteles,'refugios' => $refugios,'veterinarios' => $veterinarios]);
    }
}
