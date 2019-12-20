<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';

    //relacion
    public function organizacion()
    {
        return $this->hashMany('App\Organizacion');
    }
}
