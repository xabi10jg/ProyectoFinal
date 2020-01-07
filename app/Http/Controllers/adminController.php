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
