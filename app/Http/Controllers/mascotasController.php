<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mascota;
use App\User;

class mascotasController extends Controller
{
    public function index($id)
    {
       //
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
        return view('home', array('mascotas'=>$mascotas));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyectos::where('id',$id)->first();
        return view('proyectos/proyecto', array('proyecto'=>$proyecto));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyectos::where('id', $id)->first();
        $empleados = Empleados::all();
        return view('proyectos/editProyecto', array('proyecto'=>$proyecto), array('empleados'=>$empleados));
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
            'titulo'=>'string|min:2|max:50|required',
            'fechaI'=>'date|required',
            'fechaF'=>'date|required|after_or_equal_:fechaI',
            'horasE'=>'numeric|required'
        ]);

        $proyecto = Proyectos::where('id',$id)->first();

        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechaI');
        $proyecto->fechafin = $request->input('fechaF');
        $proyecto->horasestimadas = $request->input('horasE');
        $proyecto->responsable = $request->get('res');

        $proyecto->save();

        $proyectos = Proyectos::all();
        return view('proyectos/index', array('proyectos'=>$proyectos));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyectoDelete = Proyectos::where('id',$id)->first();
        $proyectoDelete->delete();

        $proyectos = Proyectos::all();
        return redirect(route('proyecto.index', array('proyectos'=>$proyectos)));
    }
}
