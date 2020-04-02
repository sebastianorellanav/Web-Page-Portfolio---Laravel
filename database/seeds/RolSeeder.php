<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = "Administrador";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "Visitante";
        $rol->save();
    }
}
