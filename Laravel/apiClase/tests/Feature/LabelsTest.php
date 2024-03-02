<?php
namespace Tests\Feature;

use App\Models\Labels;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LabelsTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_Labels()
    {
        $task = new Labels();
        $task->nombre = "testNombre";
        $task->save();
        $response = $this->getJson('api/Labels');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $task->id,
            'nombre' => 'Nombre: ' . $task->nombre
        ]);
    }
    public function test_create_Labels()
    {
        $data = [
            'nombre' => 'Geografia'
        ];
        $response = $this->postJson('api/Labels', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('Labels', [
            'nombre' => $data['nombre']
        ]);
        $response->assertJson([
            'nombre' => $data['nombre']
        ]);
    }
    public function test_delete_Labels()
    {
        $Labels = new Labels();
        $Labels->nombre = "Geografia";
        $Labels->save();
        $response = $this->deleteJson('api/Labels/' . $Labels->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('Labels', ['id' => $Labels]);
    }
    public function test_show_Labels()
    { {
            $Labels = Labels::create([
                'nombre' => 'Finalizado',
            ]);
            $response = $this->getJson("api/Labels/{$Labels->id}");
            $response->assertStatus(200);
            $response->assertJson([
                'data' => [
                    'id' => $Labels->id,
                    'nombre' => 'Nombre: ' . $Labels->nombre
                ]
            ]);
        }
    }
    public function test_update_Labels()
    {
        $Labels = new Labels();
        $Labels->nombre = "testNombre";
        $Labels->save();
        $Labels->nombre = "nuevoNombre";
        $updateResponse = $this->putJson('api/Labels/' . $Labels->id, [
            'nombre' => $Labels->nombre,
        ]);
        $updateResponse->assertStatus(200);
        $Labels = Labels::find($Labels->id);
        $updateResponse->assertJsonFragment([
            'id' => $Labels->id,
            'nombre' => 'Nombre: ' . $Labels->nombre,
        ]);
        $updateResponse->assertJsonMissing([
            'nombre' => 'Nombre: ' . "testNombre",
        ]);
    }
}
