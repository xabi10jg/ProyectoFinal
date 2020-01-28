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
}
