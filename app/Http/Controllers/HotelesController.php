<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class HotelesController extends Controller
{
    public function index()
    {	
    	$hoteles = Organizacion::where('tipo_id', 1)->get();
        return view('organizaciones/hoteles', array('hoteles'=>$hoteles));
    }
    public function show($id)
    {
    	$hotel = Organizacion::where('id', $id)->first();
        return view('organizaciones/hotel', array('hotel'=>$hotel));
    }
}
