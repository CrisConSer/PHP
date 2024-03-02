<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('labels')->insert([
            'nombre' => 'Diseño de interfaz'
        ]);
        DB::table('labels')->insert([
            'nombre' => 'Desarrollo de aplicacion web entorno servidor'
        ]);
        DB::table('labels')->insert([
            'nombre' => 'Despliegue de aplicaciones web'
        ]);
        DB::table('labels')->insert([
            'nombre' => 'Desarrollo de aplicacion web entorno clientes'
        ]);
    }
}
