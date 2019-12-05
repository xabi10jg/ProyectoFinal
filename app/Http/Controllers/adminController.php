<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

        return view('administrador', array('user'=>$user));
    }
}
