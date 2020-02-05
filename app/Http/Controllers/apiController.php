<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
use App\User;
use App\Organizacion;
use App\Tipo;
use App\Role;

class apiController extends Controller
{
    public function mascotas()
    {
        $mascotas = Mascota::all();
        return $mascotas;
    }

    public function usuarios(){
        $usuarios = User::all();
        return $usuarios;
    }

    public function organizaciones(){
        $orgs = Organizacion::all();
        return $orgs;
    }
    //devuelve el listado de usuarios registrados ese año y suma los de cada mes
    public function userYear($year){
        $usuariosMes=array();
        if(isset($year)){
            for($i = 1; $i < 13; $i++){
                $usuarios = User::whereYear('created_at', $year)->whereMonth('created_at', $i)->count();
                //dd($usuarios);
                array_push($usuariosMes, ['mes'=>$i, 'usuarios'=>$usuarios]);
            }
        }else{
            $year = 2020;
            for($i = 1; $i < 13; $i++){
                $usuarios = User::where('created_at', $year)->whereMonth('created_at', $i)->count();
                array_push($usuariosMes, ['mes'=>$i, 'usuarios'=>$usuarios]);
            }
        }
        
        return $usuariosMes;
    }
     public function mascotasRefugio($id){

        
        $mascotasMes = array();
        for($i = 1; $i < 13; $i++){
            $mascotas = Mascota::where('organizacion_id',$id)->whereYear('created_at', 2020)->whereMonth('created_at', $i)->count();
            array_push($mascotasMes, ['mes'=>$i, 'mascotas'=>$mascotas]);
        }
        
        
        return $mascotasMes;

        
    }

}
