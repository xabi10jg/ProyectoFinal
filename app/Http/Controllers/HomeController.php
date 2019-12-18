<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function VistaEditarUsuario()
    {
        return view('FormularioEditar');
    }
    public function EditarUsuario(Request $request){

        $request->validate([
            'nombre'=>'string|required|min:3|max:50',
            'apellido'=>['string','min:2','max:50','nullable'],
            'email'=>'email|required|min:6|max:50',
            'direccion'=>['string','min:2','max:50','nullable'],
            'localidad'=>['string','min:2','max:50','nullable'],
            'provincia'=>['string','min:2','max:50','nullable'],
            'pais'=>['string','min:2','max:50','nullable'],
            'telefono'=>['regex:/^[679][0-9]{8}$/','nullable']

        ]);


        $usuario= User::find(Auth::user()->id);

        $usuario->name = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->direccion = $request->input('direccion');
        $usuario->localidad = $request->input('localidad');
        $usuario->provincia = $request->input('provincia');
        $usuario->pais = $request->input('pais');
        $usuario->telefono = $request->input('telefono');

        $usuario->save();



        return view('home');
    }

    public function EliminarUsuario(){

        $usuario= User::find(Auth::user()->id);
        $usuario->delete();
        Auth::logout();

        return view('index');

        
    }

}
