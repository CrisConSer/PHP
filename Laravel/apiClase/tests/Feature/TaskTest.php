<?php

namespace Tests\Feature;

use App\Models\Labels;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_task()
    {
        $this->withoutExceptionHandling(); // Añadido para ver excepciones en la respuesta

        $user = User::factory()->create();
        $labels = Labels::factory()->create();
        $data = [
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba',
            'labels' => [$labels->id]
        ];
        $response = $this->actingAs($user)
                         ->postJson('api/tasks', $data);
        $response->assertStatus(422);
    }
}
