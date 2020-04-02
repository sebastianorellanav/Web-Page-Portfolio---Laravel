<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //  Atributos 
    protected $fillable = [ 'tipo',
    						'descripcion'
    					  ];

    //Metodos
    public function Roles(){
        return $this->belongsToMany('App\Rol');
    }

    public function scopeNombre($query, $tipo){
        if($tipo){
            return $query->where('tipo', '>' , $tipo); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }
}

