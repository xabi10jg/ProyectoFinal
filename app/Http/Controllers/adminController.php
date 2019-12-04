<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

	public function __construct()
    {
        $this->middleware(['admin']);
    }
	/*if(Auth::user()->role_id === 3){
    return view('administrador');
  }else{
    return redirect()->route('landing');
  }*/
    public function index()
    {
        return view('administrador');
    }
}
