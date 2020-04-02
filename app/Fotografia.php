<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Fotografia extends Model
{
    //  Atributos 
    protected $fillable = [ 'nombre',
    						'descripcion',
    						'fecha',
    						'ubicacion',
    						'ruta'
    					  ];

	//Metodos
	public function Colecciones(){
		return $this->belongsToMany('App\Coleccion','coleccion_fotografias',
			'id_fotografia','id_coleccion');
	}

	public function Users(){
		return $this->belongsToMany('App\User','fotografia_users','id_fotografia','id_user');
	}

	public function Valoracion(){
		return $this->belongsTo('App\Valoracion');
	}

	//Scope

    public function scopeNombre($query, $nombre){
        if($nombre){
            return $query->orWhere('nombre', 'LIKE', "%$nombre%"); //LIKE permite buscar palabras semejantes (no iguales)
        }
    }
    
    public function scopeDescripcion($query, $descripcion){
        if($descripcion)
            return $query->orWhere('descripcion','LIKE',"%$descripcion%"); //LIKE permite buscar palabras semejantes (no iguales)
    }

    public function scopeUbicacion($query, $ubicacion){
        if($ubicacion)
            return $query->orWhere('ubicacion','LIKE',"%$ubicacion%"); //LIKE permite buscar palabras semejantes (no iguales)
    }
    
    public function userPhotoLiked($idUser, $idFoto){
        $user = User::find($idUser);
        $foto = Fotografia::find($idFoto);
        $ifExist = $user->Fotografias()->find($idFoto);
        if($ifExist == NULL){
            $foto->Users()->attach($user);
            return "se creo el attach";
        }
        return "el atach ya existia" ;
    }

    public function scopeSearchUsuarioFoto($query,$idUser){
        //if($idUser)
            //return $query->where();
    }
}
