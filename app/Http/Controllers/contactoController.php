<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Tipo;
use Redirect;

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

    public function index()
    {

        $tipo=Tipo::all(); 
        
        return view('FormularioEncargado', compact('tipo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'string|required|min:3|max:50',
            'email'=>'required|email',
            'cif'=>'string|min:2|max:20|required'
        ]);

        $contacto = new Contacto();

        $contacto->nombre = $request->input('nombre');
        $contacto->email = $request->input('email');
        $contacto->cif = $request->input('cif');
        $contacto->tipo = $request->input('tipo');
        

        $contacto->save();

        return Redirect(route('landing'));

    }
}
