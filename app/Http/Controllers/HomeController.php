<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mascota;
use App\Role;
use App\Organizacion;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $organizacion= Organizacion::where('encargado_id',Auth::user()->id)->get();
        if(Auth::user()->role_id ===1){
            $mascotas = Mascota::where('propietario',Auth::user()->id)->get();
        }
        else{
            if(Auth::user()->role_id ===2){
                $mascotas = Mascota::where('organizacion_id',Auth::user()->id)->get();
            }
        }
        return view('home', array('mascotas'=>$mascotas, 'organizacion'=>$organizacion));
    }

    public function VistaEditarUsuario($id)
    {
        if(Auth::user()->role_id === 3){
            $user = User::where('id',$id)->first();
            $roles = Role::all();
            return view('admin.editUserAdminZone', array('user'=>$user, 'roles'=>$roles));
        }else{
            if(Auth::user()->role_id === 2){
                $organizacion= Organizacion::where('encargado_id',Auth::user()->id)->get();
                return view('FormularioEditar', array('organizacion'=>$organizacion));
            }
            else{

                return view('FormularioEditar');

            }
        }


    }
    public function EditarUsuario(Request $request, $id){

        if(Auth::user()->role_id === 3){
            $request->validate([
                'nombre'=>'string|required|min:3|max:50',
                'apellido'=>['string','min:2','max:50','nullable'],
                'email'=>'email|required|min:6|max:50',
                'direccion'=>['string','min:2','max:50','nullable'],
                'localidad'=>['string','min:2','max:50','nullable'],
                'provincia'=>['string','min:2','max:50','nullable'],
                'pais'=>['string','min:2','max:50','nullable'],
                'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
                'rol'=>['required']
            ]);
        }else{
            $request->validate([
                'nombre'=>'string|required|min:3|max:50',
                'apellido'=>['string','min:2','max:50','nullable'],
                'email'=>'email|required|min:6|max:50',
                'direccion'=>['string','min:2','max:50','nullable'],
                'localidad'=>['string','min:2','max:50','nullable'],
                'provincia'=>['string','min:2','max:50','nullable'],
                'pais'=>['string','min:2','max:50','nullable'],
                'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
            ]);
        }


        $usuario= User::where('id',$id)->first();

        $usuario->name = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->direccion = $request->input('direccion');
        $usuario->localidad = $request->input('localidad');
        $usuario->provincia = $request->input('provincia');
        $usuario->pais = $request->input('pais');
        $usuario->telefono = $request->input('telefono');
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
            $usuario->img = $json->data->link; //pilla link de la api
          }
        }
        if(Auth::user()->role_id === 3){
            $usuario->role_id = $request->get('rol');
        }

        $usuario->save();

        if(Auth::user()->role_id === 3){
            $users = User::all();
            return redirect(route('usersAdmin', array('users'=>$users)));
        }else{
            
            $mascotas = Mascota::where('propietario',Auth::user()->id)->get();
            return redirect(route('home', array('mascotas'=>$mascotas, 'usuario'=>$usuario)));
        }
    }
    public function EditarOrganizacion(Request $request, $id){

        
            $request->validate([
                'nombre'=>'string|required|min:3|max:50',
                'email'=>'email|required|min:6|max:50',
                'direccion'=>['string','min:2','max:50','nullable'],
                'telefono'=>['regex:/^[679][0-9]{8}$/','nullable'],
                'cif'=>['required']
            ]);
        


        $organizacion= Organizacion::where('encargado_id',Auth::user()->id)->get();
        $mascotas = Mascota::where('propietario',Auth::user()->id)->get();

        foreach($organizacion as $orga){

        $orga->name = $request->input('nombre');
        $orga->email = $request->input('email');
        $orga->direccion = $request->input('direccion');
        $orga->telefono = $request->input('telefono');
        $orga->img = $request->input('img');
        $orga->CIF = $request->input('cif');
        $orga->save();

        }

            return view('home', array('mascotas'=>$mascotas, 'organizacion'=>$organizacion));

    }

    public function EliminarUsuario($id){

        
        if(Auth::user()->role_id === 3){
            $user = User::where('id',$id)->first();
            $user->forceDelete();

            $users = User::all();
            return redirect(route('usersAdmin', array('users'=>$users)));
        }else{
            $usuario= User::find(Auth::user()->id);
            $usuario->delete();
            Auth::logout();
            return view('index');
        }
    }

}
