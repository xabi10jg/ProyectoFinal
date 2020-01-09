<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index()
    {
        return view('organizaciones/veterinarios');
    }
    public function show()
    {
        return view('organizaciones/veterinario');
    }
}
