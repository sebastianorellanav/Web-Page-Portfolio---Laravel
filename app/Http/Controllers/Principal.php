<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coleccion;
use App\Fotografia;
use App\Etiqueta;

class Principal extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->get('entrada');

        if($busqueda != []){
            $fotografias = Fotografia::orderBy('id','DESC')
            ->nombre($busqueda)
            ->descripcion($busqueda)
            ->ubicacion($busqueda)
            ->get();
            $colecciones = Coleccion::nombre($busqueda)
            ->descripcion($busqueda)
            ->get();
            $etiquetas = Etiqueta::nombre($busqueda)->get();

            return view('/inicio/search',compact('fotografias','colecciones','etiquetas'));
        }
        else{
            $colecciones = Coleccion::take(3)->get();
            $co = new Coleccion();
            $elementos = $co->FindTagsOfEachColection($colecciones); 
            $fotos = Fotografia::latest()->take(3)->get();
            $etiquetas = Etiqueta::take(5)->get();    
            return view('/inicio/welcome',compact('elementos'),compact('fotos','etiquetas'));
        }
    }


}
