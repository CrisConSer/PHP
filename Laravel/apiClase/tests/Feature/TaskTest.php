<?php

namespace Tests\Feature;

use App\Models\Labels;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_task()
    {
        $user = User::factory()->create();
        $label = Labels::create([
            'nombre' => 'Hola'
        ]);
        $data = [
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba',
            'labels' => [$label->id]
        ];
        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->postJson("api/task", $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', [
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion']
        ]);
    }

}
