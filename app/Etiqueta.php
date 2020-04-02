<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    //Atributos
	
    protected $fillable = [ 'nombre'];

    //Metodos

    public function Colecciones(){
		return $this->belongsToMany('App\Coleccion','coleccion_etiquetas','id_etiqueta','id_coleccion');
	}

	public function crearEtiquetas($etiquetas)
	{
		$listaEtiquetas = [];
        $cont = 0;
        foreach ($etiquetas as $tag) {
            $idEtiqueta =  $this->revisarExistenciaEtiqueta($tag);
            if ($idEtiqueta == 0) {
                $etiqueta = new Etiqueta();
                $etiqueta->nombre = $tag;
                $etiqueta->save();
                $listaEtiquetas[$cont] = $etiqueta;
            }
            else{
                $etiqueta = Etiqueta::find($idEtiqueta);
                $listaEtiquetas[$cont] = $etiqueta;
            }
            
            $cont = $cont +1;
        }
        return $listaEtiquetas;
	}

	public function revisarExistenciaEtiqueta($nombre)
    {
        $etiquetas = Etiqueta::all();
        foreach ($etiquetas as $etiqueta) {
            if ($etiqueta->nombre == $nombre) {
                return $etiqueta->id;
            }
        
        }
        return 0;
    }

    public function scopeNombre($query, $nombre){
        if($nombre){
            return $query->where('nombre', 'LIKE', "%$nombre%"); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }

}
