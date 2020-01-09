<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelesController extends Controller
{
    public function index()
    {
        return view('organizaciones/hoteles');
    }
    public function show()
    {
        return view('organizaciones/hotel');
    }
}
