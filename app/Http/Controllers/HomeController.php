<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mascota;
use App\Role;
use App\Organizacion;
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
        $mascotas = Mascota::where('propietario',Auth::user()->id)->get();
        return view('home', array('mascotas'=>$mascotas));
    }

    public function VistaEditarUsuario($id)
    {
        if(Auth::user()->role_id === 3){
            $user = User::where('id',$id)->first();
            $roles = Role::all();
            return view('admin.editUserAdminZone', array('user'=>$user, 'roles'=>$roles));
        }else{
            return view('FormularioEditar');
        }
    }
    public function EditarUsuario(Request $request, $id){

        if(Auth::user()->role_id === 3){
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
        }else{
            $request->validate([
                'nombre'=>'string|required|min:3|max:50',
                'apellido'=>['string','min:2','max:50','nullable'],
                'email'=>'email|required|min:6|max:50',
                'direccion'=>['string','min:2','max:50','nullable'],
                'localidad'=>['string','min:2','max:50','nullable'],
                'provincia'=>['string','min:2','max:50','nullable'],
                'pais'=>['string','min:2','max:50','nullable'],
                'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
            ]);
        }


        $usuario= User::where('id',$id)->first();

        $usuario->name = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->direccion = $request->input('direccion');
        $usuario->localidad = $request->input('localidad');
        $usuario->provincia = $request->input('provincia');
        $usuario->pais = $request->input('pais');
        $usuario->telefono = $request->input('telefono');

        if(Auth::user()->role_id === 3){
            $usuario->role_id = $request->get('rol');
        }

        $usuario->save();

        if(Auth::user()->role_id === 3){
            $users = User::all();
            return redirect(route('usersAdmin', array('users'=>$users)));
        }else{
            //hay que cambiarlo
            return redirect(route('admin'));
        }
    }

    public function EliminarUsuario($id){

        
        if(Auth::user()->role_id === 3){
            $user = User::where('id',$id)->first();
            $user->forceDelete();

            $users = User::all();
            return redirect(route('usersAdmin', array('users'=>$users)));
        }else{
            $usuario= User::find(Auth::user()->id);
            $usuario->delete();
            Auth::logout();
            return view('index');
        }
    }

}
