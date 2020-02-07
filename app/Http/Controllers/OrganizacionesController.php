<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;
use App\Tipo;
use App\User;
USE App\Mascota;
use Auth;

class OrganizacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
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
            $org->img = $json->data->link; //pilla link de la api
          }
        }
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
        //si el usuario es el admin envia a esta vista
        if(Auth::user()->role_id === 3){
            return view('admin.editOrg', array('tipos'=>$tipos, 'users'=>$users, 'org'=>$org));
        }
        //si es usuario es encargado y propietario de la organizacion reenvia a esta vista
        if(Auth::user()->role_id === 2 && $org->encargado_id === Auth::user()->id){
            return view('organizaciones.editOrgUser', array('tipos'=>$tipos, 'users'=>$users, 'org'=>$org));
        }
        
    }

    public function update(Request $request, $id)
    {
        $org = Organizacion::where('id', $id)->first();

        if(Auth::user()->role_id === 3){
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
                $org->img = $json->data->link; //pilla link de la api
              }
            }
            $org->encargado_id = $request->get('user');
            $org->tipo_id = $request->get('tipo');

            $org->save();

            $organizaciones = Organizacion::all();
            return redirect(route('orgAdmin', array('organizaciones'=>$organizaciones)));
        }

        if(Auth::user()->role_id === 2){
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
                $org->img = $json->data->link; //pilla link de la api
              }
            }
            $org->encargado_id = Auth::user()->id;
            $org->tipo_id = $request->get('tipo');

            $org->save();
            return redirect(route('home'));
        }

    }

    public function destroy($id)
    {
    	$org = Organizacion::find($id);
    	$org->forceDelete();

        $organizaciones = Organizacion::all();
        return redirect(route('orgAdmin', array('organizaciones'=>$organizaciones)));
    }
}
