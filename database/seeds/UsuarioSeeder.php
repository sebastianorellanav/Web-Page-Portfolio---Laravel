<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Usuario::class,100)->create();
        $rol_admin = App\Rol::where('nombre','Administrador')->first();
        $admin = new User();
        $admin->name = 'PulentoCba';
        $admin->email = 'zevaplz@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();

        $admin->Roles()->attach($rol_admin); //Se agrega rol x a usuario
    }
}
