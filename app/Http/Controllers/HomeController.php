<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function rules(){
        return ['name'=>'required|string',
                'email'=>'required|string',
                ];
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $usuario = auth()->user();
        $request->user()->autorizarRoles(['Administrador', 'Visitante']);
        $fotografias = $usuario->Fotografias;
        return view('/usuario/home', compact('usuario','fotografias'));
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('/usuario/editarPerfil',compact('usuario'));
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
        $usuario = User::find($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->firstName=$request->get('firstName');
        $usuario->lastName=$request->get('lastName');
        $usuario->address=$request->get('address');
        $usuario->city=$request->get('city');
        $usuario->country=$request->get('country');
        
        if(request()->hasFile('photo')){
            if($usuario['photo'] != NULL){
                Storage::delete('public/'.$usuario->photo);
            }

            $usuario['photo']=$request->file('photo')->store('/upload/profiles','public');
        }
        
        $usuario->save();
        
        $usuario = auth()->user(); 
        return redirect()->route('home.index')->with('success','Registro creado satisfactoriamente');
    }
}
