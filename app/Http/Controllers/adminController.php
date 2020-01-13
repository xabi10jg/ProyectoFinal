<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
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


        return view('administrador', array('user'=>$user), array('users'=>$users, 'mascotas'=>$mascotas, 'organizaciones'=>$organizaciones));
    }

    //Zona Usuario
    public function editUser($id){
        $user = User::where('id',$id)->first();
        $roles = Role::all();
        return view('admin.editUserAdminZone', array('user'=>$user, 'roles'=>$roles));
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
            'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
            'rol'=>['required']

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
        $usuario->role_id = $request->get('rol');

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

    //Zona mascotas
    public function editMascota($id){
        $mascota = Mascota::where('id',$id)->first();
        $users = User::all();
        return view('admin.editMascAdminZone', array('users'=>$users, 'mascota'=>$mascota));
    }

    public function updateMasc(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|min:2|max:30|string',
            'fecha_nacimiento' => 'required|date',
            'raza' => 'required|min:2|max:30|string',
            'descripcion' => 'required|string|min:2|max:300'
           
            
        ]);
        $mascota = Mascota::find($id);
        $mascota->name = $request -> input('nombre');
        $mascota->fecha_nacimiento = $request -> input('fecha_nacimiento');
        $mascota->raza = $request -> input('raza');
        $mascota->descripcion = $request -> input('descripcion');
        if ($request->input('img')!=null) {
            $mascota->img = '/img/portfolio/'.$request->input('img');
        }
        
        $mascota->save();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));
    }

    public function destroyMasc($id)
    {
        $mascota = Mascota::find($id);
        $mascota->forceDelete();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('user'=>$user), array('users'=>$users, 'organizaciones'=>$organizaciones)));
    }
}
