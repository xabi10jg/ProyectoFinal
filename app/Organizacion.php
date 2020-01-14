<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizacion';

    //relacion
    public function encargado()
    {
        return $this->belongsTo('App\User', 'encargado_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    public function mascotas()
    {
        return $this->hashMany('App\Mascota');
    }
}
