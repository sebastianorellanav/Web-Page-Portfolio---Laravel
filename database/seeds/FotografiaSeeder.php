<?php

use Illuminate\Database\Seeder;

class FotografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Fotografia::class,4)->create();

        $usuario_foto = App\User::where('id', 1)->first();
        $coleccion = App\Coleccion::where('id', 1)->first();
        $foto = new App\Fotografia();
        $foto->nombre = 'foto1';
        $foto->descripcion = 'zevaplz@gmail.com';
        $foto->ubicacion = 'zevaplz.com';
        $foto->ruta = 'zevaplz';
        $foto->fecha = 'zevapfsfsfslz';
        $foto->save();

        $foto->Users()->attach($usuario_foto);
        $foto->Colecciones()->attach($coleccion);

        $usuario_foto = App\User::where('id', 1)->first();
        $foto = new App\Fotografia();
        $foto->nombre = 'foto2';
        $foto->descripcion = 'zevaplz@gmail.com';
        $foto->ubicacion = 'zevaplz.com';
        $foto->ruta = 'zevaplz';
        $foto->fecha = 'zevapfsfsfslz';
        $foto->save();
        $foto->Colecciones()->attach($coleccion);

         //Se agrega rol x a usuario
    }
}
