<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //  Atributos 
    protected $fillable = [ 'nombre'
    					  ];

    //Metodos
    public function Permisos(){
        return $this->belongsToMany('App\Permiso');
    }

    public function Users(){
        return $this->belongsToMany('App\User','rol_usuarios','id_rol','id_user');
    }
}
