<?php
namespace Tests\Feature;

use App\Models\Labels;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LabelsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test para obtener las etiquetas.
     *
     * @return void
     */
    public function test_get_labels()
    {
        // Crear una etiqueta de ejemplo en la base de datos
        $label = Labels::factory()->create(['nombre' => 'Ejemplo']);

        // Realizar la solicitud para obtener las etiquetas
        $response = $this->getJson('api/labels');

        // Asegurarse de que la solicitud sea exitosa y la etiqueta esté presente en la respuesta
        $response->assertStatus(200)
            ->assertJsonFragment([
                'id' => $label->id,
                'nombre' => $label->nombre
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
