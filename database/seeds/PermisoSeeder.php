<?php

use Illuminate\Database\Seeder;
use App\Permiso;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso = new Permiso();
        $permiso->tipo = 1;
        $permiso->descripcion = "Permiso total";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 2;
        $permiso->descripcion = "Solo Borrar";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 3;
        $permiso->descripcion = "Solo subir fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 4;
        $permiso->descripcion = "Subir y borrar fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 5;
        $permiso->descripcion = "Solo Comentar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 6;
        $permiso->descripcion = "Solo Buscar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 7;
        $permiso->descripcion = "Buscar y Comentar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 8;
        $permiso->descripcion = "Crear Colecciones";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 9;
        $permiso->descripcion = "Crear Colecciones, Subir Fotos y Eliminar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 10;
        $permiso->descripcion = "Solo Valorar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 11;
        $permiso->descripcion = "Buscar, Comentar y Valorar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 12;
        $permiso->descripcion = "Comentar y Valorar Fotos";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->tipo = 13;
        $permiso->descripcion = "Buscar y Valorar Fotos";
        $permiso->save();
    }
}
