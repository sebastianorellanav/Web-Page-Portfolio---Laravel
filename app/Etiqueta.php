<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coleccion;

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

    public function scopeIdEtiqueta($query, $id){
        if($id){
            return $query->where('id', $id); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }

    public function getPhotosAndColections($etiqueta)
    {
        $listPhotos = [];   //lista vacia
        $cont = 0;          //contador = 0

        //obtener las colecciones relacionadas con la etiqueta ingresada (muchos a muchos)
        $colecciones = $etiqueta->Colecciones;
        //para cada coleccion
        foreach ($colecciones as $coleccion) {  
            //obtener las fotos relacionadas con la coleccion (muchos a muchos)
            $photos = $coleccion->Fotogrfias;

            if($photos != NULL){
                //para cada lista de fotos
                foreach ($photos as $photo) {
                    //añadir las fotos a una lista unica
                    $listPhotos[$cont] = $photo;
                    //aumentar contador
                    $cont = $cont +1;
                }
            }
        }
        $result = [];       //lista vacia
        //guardar colecciones
        $result[0] = $colecciones;
        //guardar photos
        $result[1] = $listPhotos;

        //retornar resultado
        return $result;
    }

}
