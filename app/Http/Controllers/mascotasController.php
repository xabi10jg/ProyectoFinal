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
        $imagen = $request->file('img');
        if($imagen == ''){
          }else{

            $image64 = base64_encode(file_get_contents($imagen)); //pasar la foto a base64

          //llamar a la api y subir la imagen
          $curl = curl_init();

          $client_id = "9db87030e1b137f";

          $token = "2ce7e04187d9aa9a56c60e998b6c1653a79c4bc9";

          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.imgur.com/3/image",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('image' => $image64),
            CURLOPT_HTTPHEADER => array(
              // "Authorization: Client-ID {{1cb45b7462006f}}",
              "Authorization: Bearer ".$token //nuestro token para acceder a la api
            ),
          ));
          $response = curl_exec($curl);
          $err = curl_error($curl);

          curl_close($curl);

          if ($err) {
            echo "cURL Error #:" . $err;
          } else {
            $json = json_decode($response);
            $mascota->img = $json->data->link; //pilla link de la api
          }
        }
        if(Auth::user()->role_id === 1){
            $mascota->propietario = Auth::user()->id;
        }else if(Auth::user()->role_id === 2){
            $org = Organizacion::where('encargado_id', Auth::user()->id)->first();
            if($org->tipo_id === 5 || $org->tipo_id === 2 || $org->tipo_id === 4){
                $mascota->organizacion_id = $org->id;
            }else{
                $mascota->propietario = Auth::user()->id;
            }
        }

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
            $orgs = Organizacion::all();
            return view('admin.editMascAdminZone', array('users'=>$users, 'mascota'=>$mascota, 'orgs'=>$orgs));
        }else{
            $users = User::all();
            $orgs = Organizacion::all();
            return view ('mascotas.mascotaEdit')->with(['mascota'=> $mascota, 'orgs'=>$orgs]);
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
        $imagen = $request->file('img');
        $mascota->name = $request -> input('nombre');
        $mascota->fecha_nacimiento = $request -> input('fecha_nacimiento');
        $mascota->raza = $request -> input('raza');
        $mascota->descripcion = $request -> input('descripcion');
        if($imagen == ''){
           dd('error');
          }else{

            $image64 = base64_encode(file_get_contents($imagen)); //pasar la foto a base64

          //llamar a la api y subir la imagen
          $curl = curl_init();

          $client_id = "9db87030e1b137f";

          $token = "2ce7e04187d9aa9a56c60e998b6c1653a79c4bc9";

          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.imgur.com/3/image",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('image' => $image64),
            CURLOPT_HTTPHEADER => array(
              // "Authorization: Client-ID {{1cb45b7462006f}}",
              "Authorization: Bearer ".$token //nuestro token para acceder a la api
            ),
          ));
          $response = curl_exec($curl);
          $err = curl_error($curl);

          curl_close($curl);

          if ($err) {
            echo "cURL Error #:" . $err;
          } else {
            $json = json_decode($response);
            $mascota->img = $json->data->link; //pilla link de la api
          }
        }
        if(Auth::user()->role_id === 1){
            $mascota->propietario = Auth::user()->id;
        }else if(Auth::user()->role_id === 2){
            $org = Organizacion::where('encargado_id', Auth::user()->id)->first();
            if($org->tipo_id === 5 || $org->tipo_id === 2 || $org->tipo_id === 4){
                $mascota->organizacion_id = $org->id;
            }else{
                $mascota->propietario = Auth::user()->id;
            }
        }else if(Auth::user()->role_id === 3){
            if($request->input('org') === "null" && $request->input('user') != "null"){
                $mascota->propietario = $request->input('user');
                $mascota->organizacion_id = NULL;
            }
            if($request->input('user') === "null" && $request->input('org') != "null"){
                $mascota->organizacion_id = $request->input('org');
                $mascota->propietario = NULL;
            }
            
            
        }
        
        $mascota->save();
        if(Auth::user()->role_id === 3){
            $mascotas = Mascota::all();
            return redirect(route('mascAdmin', array('mascotas'=>$mascotas)));
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
        if(Auth::user()->role_id === 3){
            $mascota = Mascota::find($id);
            $mascota->forceDelete();

            $mascotas = Mascota::all();
            return redirect(route('mascAdmin', array('mascotas'=>$mascotas)));
        }else{
            $mascota = Mascota::find($id);
            $mascota->delete();
            $mascotas = Mascota::all();
            return redirect(route('mascotas.index'));
        }
    }
}
