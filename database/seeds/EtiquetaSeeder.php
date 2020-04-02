<?php

use Illuminate\Database\Seeder;
use App\Etiqueta;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Etiqueta::class,80)->create();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "urban";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "people";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "art";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "nature";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "animals";
        $etiqueta->save();
    }
}
