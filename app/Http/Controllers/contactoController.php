<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class contactoController extends Controller
{
    public function insert(Request $request){
    	//validacion datos
		$request->validate([
			'nombre'=>'string|required|min:3|max:50',
			'email'=>'email|required|min:6|max:50',
			'mensaje'=>'string|required|min:1|max:255']
		);

    	$data = new Contacto;

    	//pillar los datos del input

    	$data->nombre= $request->input('nombre');
    	$data->email= $request->input('email');
    	$data->mensaje= $request->input('mensaje');

    	$data->save();

    	return view('index');
    }
}
