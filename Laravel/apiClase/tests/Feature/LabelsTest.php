<?php

namespace Tests\Feature;

use App\Models\Labels;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LabelsTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_labels()
{
    $user = User::factory()->create();
    Sanctum::actingAs($user); // Autenticar al usuario

    $label = Labels::factory()->create();
    $response = $this->getJson('api/labels');

    $response->assertStatus(200)
             ->assertJsonFragment([
                 'id' => $label->id,
                 'nombre' => $label->nombre
             ]);
}

    public function test_create_labels()
    {
        $data = [
            'nombre' => 'Figma'
        ];
        $response = $this->postJson('api/labels', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('labels', [
            'nombre' => $data['nombre']
        ]);
        $response->assertJson([
            'nombre' => $data['nombre']
        ]);
    }

   
}
