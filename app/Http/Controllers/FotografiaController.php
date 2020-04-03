<?php

namespace App\Http\Controllers;

use App\Fotografia;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use App\Coleccion;
use App\User;
use Illuminate\Support\Facades\Storage;

class FotografiaController extends Controller
{
    public function rules(){
        return ['nombre'=>'required|string',
                'descripcion'=>'required|string',
                'ubicacion'=>'required|string'];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fotografias = Fotografia::all();
        return view('fotografia.mostrarFotografias',compact('fotografias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $colecciones = Coleccion::all();
        return view('fotografia.crearFotografia',compact('colecciones'));
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
        if ($validator->fails()){
            return $validator->messages();
            return view('fotografia.error');
        }
        $fotografia = new Fotografia();
        $fotografia->nombre = $request->get('nombre');
        $fotografia->ubicacion = $request->get('ubicacion');
        $fotografia->descripcion = $request->get('descripcion');
        $fotografia->fecha = Carbon::now();

        if(request()->hasFile('ruta')){
            $fotografia['ruta']=$request->file('ruta')->store('upload','public');
        }

        $fotografia->save();
        $fotografia->Colecciones()->attach($request->get('coleccion'));

        $fotografias = Fotografia::all();
        return view('/fotografia/mostrarFotografias',compact('fotografias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotografia = Fotografia::find($id);
        $instancia = new Fotografia();
        $etiquetas = $instancia->getEtiquetas($fotografia);
        if($etiquetas == NULL)
            $etiquetas = [];
        $masFotos = Fotografia::latest()->take(4)->get();
        return view('/fotografia/mostrarDetalleFoto',compact('fotografia','etiquetas','masFotos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fotografia = Fotografia::find($id);
        return view('/fotografia/editarFotografia',compact('fotografia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), $this->rules());
        if ($validator->fails()){
            return $validator->messages();
        }
        $fotografia = Fotografia::find($id);
        $fotografia->nombre = $request->get('nombre');
        $fotografia->ubicacion = $request->get('ubicacion');
        $fotografia->descripcion = $request->get('descripcion');
        $fotografia->save();
        $fotografias = Fotografia::all();
        return view('fotografia.administrarFotografias',compact('fotografias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotografia = Fotografia::find($id);
        if(Storage::delete('public/'.$fotografia->ruta))
        {
            Fotografia::find($id)->delete();
        }
        $fotografias = Fotografia::all();
        return view('fotografia.administrarFotografias',compact('fotografias'));
    }



    public function administrarFotografias()
    {
        $fotografias = Fotografia::all();
        return view('fotografia.administrarFotografias',compact('fotografias'));
    }



    public function userPhotoLikedController($idFoto)
    {
        $user = auth()->user();
        $idUser = $user->id;
        $foto_instancia = new Fotografia();
        $foto_instancia->userPhotoLiked($idUser,$idFoto);

        $fotografia = Fotografia::find($idFoto);
        $instancia = new Fotografia();
        $etiquetas = $instancia->getEtiquetas($fotografia);
        if($etiquetas == NULL)
            $etiquetas = [];
        $masFotos = Fotografia::latest()->take(4)->get();
        return view('/fotografia/mostrarDetalleFoto',compact('fotografia','etiquetas','masFotos'));
    }

}
