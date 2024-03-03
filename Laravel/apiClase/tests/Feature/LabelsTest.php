<?php

namespace Tests\Feature;

use App\Models\Labels;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LabelsTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_labels()
    {
        $user = User::factory()->create();
        $label = Labels::factory()->create();
        $response = $this->actingAs($user)
                         ->getJson('api/labels');
        $response->assertStatus(200)
                 ->assertJsonFragment([
                     'id' => $label->id,
                     'nombre' => $label->nombre
                 ]);
    }

    public function test_create_labels()
    {
        $this->withoutExceptionHandling(); // Añadido para ver excepciones en la respuesta

        $user = User::factory()->create();
        $data = [
            'nombre' => 'Figma'
        ];
        $response = $this->actingAs($user)
                         ->postJson('api/labels', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('labels', [
            'nombre' => $data['nombre']
        ]);
        $response->assertJson([
            'nombre' => $data['nombre']
        ]);
    }
}
