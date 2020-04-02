<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermisoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(ValoracionSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ColeccionSeeder::class);
        $this->call(EtiquetaSeeder::class);
        $this->call(FotografiaSeeder::class);

    }
}
