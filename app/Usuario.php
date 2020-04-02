<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //  Atributos 
    protected $fillable = [ 'nombre',
    						'contrasena',
    						'correo',
    						'descripcion'
    					  ];

	//Metodos
	
	public function Fotografias(){
		return $this->hasMany('App\Fotografia');
	}
}
