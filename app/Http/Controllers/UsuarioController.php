<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function rules(){
        return ['nombre'=>'required|string',
                'correo'=>'required|string',
                'descripcion'=>'required|string',
                'contrasena'=>'required|string'];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
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
        $usuario = new Usuario();
        $usuario->nombre=$request->get('nombre');
        $usuario->descripcion= $request->get('descripcion');
        $usuario->correo=$request->get('correo');
        $usuario->contrasena=$request->get('contrasena');
        $usuario->save();
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if($validator->fails()){
            return $validator->messages();
        }
        $usuario = Usuario::find($id);
        $usuario->nombre=$request->get('nombre');
        $usuario->descripcion= $request->get('descripcion');
        $usuario->correo=$request->get('correo');
        $usuario->contrasena=$request->get('contrasena');
        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();
        return response()->json("El usuario fue eliminado exitosamente");
    }

    public function postNewImage(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required | image'
        ]);

        $user = auth()->user();
        $extension = $request->file('photo')->getClienOriginalExtension();
        $file_name = $user->id . '.' . $extension;

        Image::make($request->file('photo'))
            ->resize(160,160)
            ->save('img/users/' . $file_name);

        $user->photo = $extension;
        $user->save();

        return back()->with('notification','Se ha actualizado tu foto');
    }
}
