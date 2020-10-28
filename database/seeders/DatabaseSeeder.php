<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\catalogo\Cliente;
use App\Models\catalogo\Programa;
use App\Models\registro\Asignacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(5)->create();
         Cliente::factory(10)->create();
         Programa::factory(5)->create();
         Asignacion::factory(50)->create();
    }
}
