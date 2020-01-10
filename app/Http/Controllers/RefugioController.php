<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class RefugioController extends Controller
{
    public function index()
    {
        $refugios = Organizacion::where('tipo_id',2)->get();
        return view('organizaciones.refugios',['refugios' => $refugios]);
    }
}
