<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';

    //relacion
    public function usuario()
    {
        return $this->belongsTo('App\User', 'propietario');
    }

    public function organizacion()
    {
        return $this->belongsTo('App\Organizacion', 'organizacion_id');
    }
}
