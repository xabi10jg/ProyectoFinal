<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;
use App\Tipo;
use App\User;
USE App\Mascota;

class OrganizacionesController extends Controller
{
    public function index()
    {
        $hoteles = Organizacion::where('tipo_id',1)->get();
        $refugios = Organizacion::where('tipo_id',2)->get();
        $veterinarios = Organizacion::where('tipo_id',3)->get();
        return view('organizaciones', ['hoteles' => $hoteles,'refugios' => $refugios,'veterinarios' => $veterinarios]);
    }

    public function create()
    {
    	$users = User::all();
    	$tipos = Tipo::all();
        return view('admin.crearOrg', array('tipos'=>$tipos, 'users'=>$users));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'string|required|min:3|max:50',
            'email'=>'email|required|min:6|max:50',
            'direccion'=>['string','min:2','max:50','nullable'],
            'localidad'=>['string','min:2','max:50','nullable'],
            'provincia'=>['string','min:2','max:50','nullable'],
            'pais'=>['string','min:2','max:50','nullable'],
            'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
            'HApertura'=>'required',
            'HCierre'=>'required',
            'CIF'=>'required',
            'img'=>'required',
            'user'=>['required'],
            'tipo'=>['required']
        ]);

        $org = new Organizacion();

        $org->name = $request->input('nombre');
        $org->email = $request->input('email');
        $org->direccion = $request->input('direccion');
        $org->localidad = $request->input('localidad');
        $org->provincia = $request->input('provincia');
        $org->pais = $request->input('pais');
        $org->telefono = $request->input('telefono');
        $org->horarioApertura = $request->input('HApertura');
        $org->horarioCierre = $request->input('HCierre');
        $org->CIF = $request->input('CIF');
        $org->img = '/img/portfolio/'.$request->input('img');
        $org->encargado_id = $request->get('user');
        $org->tipo_id = $request->get('tipo');

        $org->save();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));

    }

    public function show($id){
    	//
    }

    public function edit($id){
    	$users = User::all();
    	$org = Organizacion::where('id', $id)->first();
    	$tipos = Tipo::all();
        return view('admin.editOrg', array('tipos'=>$tipos, 'users'=>$users, 'org'=>$org));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre'=>'string|required|min:3|max:50',
            'email'=>'email|required|min:6|max:50',
            'direccion'=>['string','min:2','max:50','nullable'],
            'localidad'=>['string','min:2','max:50','nullable'],
            'provincia'=>['string','min:2','max:50','nullable'],
            'pais'=>['string','min:2','max:50','nullable'],
            'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
            'HApertura'=>'required',
            'HCierre'=>'required',
            'CIF'=>'required',
            'img'=>'nullable',
            'user'=>['required'],
            'tipo'=>['required']
        ]);

        $org = Organizacion::where('id', $id)->first();

        $org->name = $request->input('nombre');
        $org->email = $request->input('email');
        $org->direccion = $request->input('direccion');
        $org->localidad = $request->input('localidad');
        $org->provincia = $request->input('provincia');
        $org->pais = $request->input('pais');
        $org->telefono = $request->input('telefono');
        $org->horarioApertura = $request->input('HApertura');
        $org->horarioCierre = $request->input('HCierre');
        $org->CIF = $request->input('CIF');
        $org->img = '/img/portfolio/'.$request->input('img');
        $org->encargado_id = $request->get('user');
        $org->tipo_id = $request->get('tipo');

        $org->save();

        $users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));

    }

    public function destroy($id)
    {
    	$org = Organizacion::find($id);
    	$org->forceDelete();

    	$users = User::all();
        $mascotas = Mascota::all();
        $organizaciones = Organizacion::all();
        return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));
    }
}
