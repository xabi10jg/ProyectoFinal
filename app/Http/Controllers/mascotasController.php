<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mascota;
use App\User;
use App\Organizacion;

class mascotasController extends Controller
{
    public function index()
    {
       $mascotas = Mascota::where('propietario',Auth::user()->id)->get();

       return view('mascotas/mascotas')->with(['mascotas'=>$mascotas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas/mascotaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'string|required|min:3|max:50',
            'fecha_nacimiento'=>'date|required',
            'raza'=>'string|min:2|max:50|required',
            'descripcion'=>'string|min:2|max:50|required',
            'img'=>'required'
        ]);

        $mascota = new Mascota();

        $mascota->name = $request->input('nombre');
        $mascota->fecha_nacimiento = $request->input('fecha_nacimiento');
        $mascota->raza = $request->input('raza');
        $mascota->descripcion = $request->input('descripcion');
        $mascota->img = '/img/portfolio/'.$request->input('img');
        $mascota->propietario = Auth::user()->id;

        $mascota->save();

        $mascotas = Mascota::where('propietario',Auth::user()->id)->get();
        return view('mascotas/mascotas', array('mascotas'=>$mascotas));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = Mascota::find($id);
        if(Auth::user()->role_id === 3){
            $mascota = Mascota::where('id',$id)->first();
            $users = User::all();
            return view('admin.editMascAdminZone', array('users'=>$users, 'mascota'=>$mascota));
        }else{
            return view ('mascotas.mascotaEdit')->with(['mascota'=> $mascota]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        if(Auth::user()->role_id === 3){
            $users = User::all();
            $mascotas = Mascota::all();
            $organizaciones = Organizacion::all();
            return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));
        }else{
            return redirect(route('mascotas.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota = Mascota::find($id);
        $mascota->forceDelete();
        if(Auth::user()->role_id === 3){
            $users = User::all();
            $mascotas = Mascota::all();
            $organizaciones = Organizacion::all();
            return redirect(route('admin', array('users'=>$users, 'organizaciones'=>$organizaciones, 'mascotas'=>$mascotas)));
        }else{
        return redirect(route('mascotas.index'));
        }
    }
}
