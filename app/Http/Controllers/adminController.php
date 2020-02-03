<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use App\Mascota;
use App\Organizacion;
use App\Tipo;
use App\Contacto;

class adminController extends Controller
{

	public function __construct()
    {
        $this->middleware(['auth']);
    }
	
    public function index(Request $request)
    {
        $user = Auth::user();
    	$request->user()->authorizeRoles(['Administrador']);
        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();


        return view('admin.index', array('user'=>$user), array('users'=>$users, 'mascotas'=>$mascotas, 'organizaciones'=>$organizaciones));
    }

    public function usersAdmin(){
        $users = User::all();
        return view('admin.usersAdmin', array('users'=>$users));
    }

    public function mascAdmin(){
        $mascotas = Mascota::all();
        return view('admin.mascAdmin', array('mascotas'=>$mascotas));
    }

    public function orgAdmin(){
        $organizaciones = Organizacion::all();
        return view('admin.orgAdmin', array('organizaciones'=>$organizaciones));
    }

    public function peticiones(){
        $peticiones = Contacto::all();
        return view('admin.peticiones', array('peticiones'=>$peticiones));
    }

    public function aceptarPeticion($id){
        $peticion = Contacto::find($id);

        $organizacion = new Organizacion();
        $organizacion->name = $peticion->nombre;
        $organizacion->email = $peticion->email;
        $organizacion->CIF = $peticion->cif;
        $organizacion->tipo_id = $peticion->tipo;
        $organizacion->encargado_id = $peticion->encargado;

        $organizacion->save();

        $peticion->forceDelete();

        return redirect(route('peticiones'));
    }

    public function eliminarPeticion($id){
        $peticion = Contacto::find($id);
        $peticion->forceDelete();
    }
}
