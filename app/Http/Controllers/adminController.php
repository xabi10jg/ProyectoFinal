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
        $tipos = Tipo::all();


        return view('administrador', array('user'=>$user), array('users'=>$users, 'organizaciones'=>$organizaciones));
    }

    public function edit($id){
        $user = User::where('id',$id)->first();
        return view('editUserAdminZone', array('user'=>$user));
    }
}
