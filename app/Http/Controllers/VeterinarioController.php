<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class VeterinarioController extends Controller
{
    public function index()
    {   
        $veterinarios = Organizacion::where('tipo_id',3)->get();
        return view('organizaciones/veterinarios',['veterinarios' => $veterinarios]);
    }
    public function show($id)
    {
        $veterinario = Organizacion::find($id);
        return view('organizaciones.veterinario',compact('veterinario'));
    }
}
