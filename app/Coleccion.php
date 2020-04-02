<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Etiqueta;

class Coleccion extends Model
{
    //Atributos
	
    protected $fillable = [ 'nombre',
    						'descripcion'
    					  ];

    //Metodos
    public function Fotografias(){
        return $this->belongsToMany('App\Fotografia','coleccion_fotografias',
            'id_coleccion','id_fotografia');
    }

    public function Etiquetas(){
        return $this->belongsToMany('App\Etiqueta', 'coleccion_etiquetas','id_coleccion','id_etiqueta');
    }

    public function FindTagsOfEachColection($colecciones)
    {

        $coleccionEtiquetas = [];
        $dupla = [];
        $cont = 0;
        foreach ($colecciones as $coleccion) {
            $dupla[0] = $coleccion;
            $dupla[1] = $coleccion->Etiquetas;
            $dupla[2] = $coleccion->Fotografias->first();
            $coleccionEtiquetas[$cont] = $dupla;
            $cont = $cont+1;
        }
        return $coleccionEtiquetas;
    }

    public function scopeNombre($query, $nombre){
        if($nombre){
            return $query->orWhere('nombre', 'LIKE', "%$nombre%"); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }

    public function scopeDescripcion($query, $descripcion){
        if($descripcion){
            return $query->orWhere('descripcion', 'LIKE', "%$descripcion%"); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }
}
