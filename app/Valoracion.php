<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    //  Atributos 
    protected $fillable = [ 'puntaje',
    						'descripcion'
    					  ];

    //Metodos
    public function Fotografias(){
      return $this->hasMany('App\Fotografia');
    }
}
