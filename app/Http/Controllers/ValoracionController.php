<?php

namespace App\Http\Controllers;

use App\Valoracion;
use Illuminate\Http\Request;

class ValoracionController extends Controller
{
    public function rules(){
        return ['puntaje'=>'required|numeric',
                'descripcion'=>'required|string'];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoracion = Valoracion::all();
        return $valoracion;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $this->store($request);
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
        $valoracion = new Valoracion();
        $valoracion->puntaje=$request->get('puntaje');
        $valoracion->descripcion= $request->get('descripcion');
        $valoracion->save();
        return $valoracion;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valoracion = Valoracion::find($id);
        return $valoracion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Valoracion $valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return $validator->messages();
        }
        $valoracion = Valoracion::find($id);
        $valoracion->puntaje=$request->get('puntaje');
        $valoracion->descripcion= $request->get('descripcion');
        $valoracion->save();
        return $valoracion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Valoracion  $valoracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $valoracion = Valoracion::find($id)->delete();
        return response()->json("La Valoracion fue eliminada exitosamente");
    }
}
