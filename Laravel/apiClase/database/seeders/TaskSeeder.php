<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tasks')->insert([
            'titulo' => 'PHP project',
            'descripcion' => 'Proyecto en Laravel'
        ]);
        DB::table('tasks')->insert([
            'titulo' => 'JavaScrip',
            'descripcion' => 'Realización carrito de comprar'
        ]);
        DB::table('tasks')->insert([
            'titulo' => 'Figma',
            'descripcion' => 'Creación prototipo página web'
        ]);
        
    }
}

