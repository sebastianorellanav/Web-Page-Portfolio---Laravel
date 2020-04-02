<?php

namespace App\Http\Controllers;

use App\Coleccion;
use Illuminate\Http\Request;
use Validator;
use App\Fotografia;
use App\Etiqueta;


class ColeccionController extends Controller
{
    public function rules(){
        return ['nombre'=>'required|string',
                'descripcion'=>'required|string'];
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $colecciones = Coleccion::all();
        $co = new Coleccion();
        $coleccionEtiquetas = $co->FindTagsOfEachColection($colecciones);     
        return view('/coleccion/mostrarColecciones',compact('coleccionEtiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('/coleccion/crearColeccion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return $validator->messages();
        }

        $etiquetas =  explode(',', $request->get('etiqueta'));
        $et = new Etiqueta();
        $listaEtiquetas = $et->crearEtiquetas($etiquetas);

        $coleccion = new Coleccion();
        $coleccion->nombre=$request->get('nombre');
        $coleccion->descripcion= $request->get('descripcion');
        $coleccion->save();

        foreach ($listaEtiquetas as $etiqueta) {
            $coleccion->Etiquetas()->attach($etiqueta->id);
        }
        $colecciones = Coleccion::all();
        $co = new Coleccion();
        $coleccionEtiquetas = $co->FindTagsOfEachColection($colecciones);        
        return view('/coleccion/mostrarColecciones',compact('coleccionEtiquetas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coleccion  $coleccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coleccion = Coleccion::find($id);
        $fotografias = $coleccion->Fotografias;
        $etiquetas = $coleccion->Etiquetas;
        return view('/coleccion/mostrarContenido',compact('coleccion','fotografias','etiquetas'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coleccion  $coleccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coleccion = Coleccion::find($id);
        return view('/coleccion/editarColeccion',compact('coleccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coleccion  $coleccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return $validator->messages();
        }

        $coleccion = Coleccion::find($id);
        $coleccion->nombre=$request->get('nombre');
        $coleccion->descripcion= $request->get('descripcion');
        $coleccion->save();
        
        $colecciones = Coleccion::all();
        return view('/coleccion/administrarColecciones',compact('colecciones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coleccion  $coleccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coleccion = Coleccion::find($id)->delete();
        $colecciones = Coleccion::all();
        return view('/coleccion/administrarColecciones',compact('colecciones'));
    }

    public function administrarColecciones()
    {
        $colecciones = Coleccion::all();
        return view('/coleccion/administrarColecciones',compact('colecciones'));
    }


}
