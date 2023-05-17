<?php

namespace Database\Seeders;

use App\Models\proveedor;
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
        // User::factory(10)->create();
        $proveedor = new proveedor();
        $proveedor->codigo_proveedor='ABC1234';
        $proveedor->nombre_proveedor='Proveedor 2';
        $proveedor->direccion='Entre Rios';
        $proveedor->telefono='77777776';
        $proveedor->save();
    }
}
