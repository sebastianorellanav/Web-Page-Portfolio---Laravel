<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstName', 'lastName' , 'address', 'city', 'country', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Roles(){
        return $this->belongsToMany('App\Rol','rol_usuarios','id_user','id_rol');
    } 

    public function Fotografias(){
        return $this->belongsToMany('App\Fotografia','fotografia_users','id_user','id_fotografia');
    }

    public function tieneRol($rol){

        if($this->Roles()->where('nombre',$rol)->first()){
            return true;
        }
        return false;
    }

    public function tieneAlgunRol($rols){

        if(is_array($rols)){
            foreach($rols as $rol){
                if($this->tieneRol($rol)){
                    return true;
                }
            }
        }
        else{
            if($this->tieneRol($rols)){
                return true;
            }
        }
        return false;
    }

    public function autorizarRoles($rols){

        //Método que autoriza acción en rol
        if($this->tieneAlgunRol($rols)){
            return true;
        }
        abort(401,'Esta acción no está autorizada.');
    }

    public function getPhotoRouteAttribute()
    {
        if ($this->photo)
            return 'img/users/' . $this->id . '.' . $this->photo;

        return 'public/assets/img/avatars/avatar.jpg';
    }

}
