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
}
