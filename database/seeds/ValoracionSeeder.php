<?php

use Illuminate\Database\Seeder;
use App\Valoracion;

class ValoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valoracion = new Valoracion();
        $valoracion->puntaje = 1;
        $valoracion->descripcion = "Mejorable";
        $valoracion->save();

        $valoracion = new Valoracion();
        $valoracion->puntaje = 2;
        $valoracion->descripcion = "Bueno";
        $valoracion->save();

        $valoracion = new Valoracion();
        $valoracion->puntaje = 3;
        $valoracion->descripcion = "Perfecto";
        $valoracion->save();
    }
}
