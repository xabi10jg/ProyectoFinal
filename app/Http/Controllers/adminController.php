<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Mascota;
use App\Organizacion;
use App\Tipo;

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


        return view('administrador', array('user'=>$user), array('users'=>$users, 'organizaciones'=>$organizaciones));
    }

    public function editUser($id){
        $user = User::where('id',$id)->first();
        return view('editUserAdminZone', array('user'=>$user));
    }

    public function updateUser(Request $request, $id)
    {
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


        $usuario= User::where('id',$id)->first();

        $usuario->name = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->direccion = $request->input('direccion');
        $usuario->localidad = $request->input('localidad');
        $usuario->provincia = $request->input('provincia');
        $usuario->pais = $request->input('pais');
        $usuario->telefono = $request->input('telefono');

        $usuario->save();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));
    }

    public function destroyUser($id)
    {
        $user = User::where('id',$id)->first();
        $user->forceDelete();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('user'=>$user), array('users'=>$users, 'organizaciones'=>$organizaciones)));
    }
}
