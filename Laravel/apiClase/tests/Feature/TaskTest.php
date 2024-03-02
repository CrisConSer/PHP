<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Labels;
use App\Models\User;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    public function test_store_Task()
    {
        $user = User::factory()->create();
        $Labels = Labels::create([
            'nombre' => 'Hola'
        ]);
        $data = [
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba',
            'Labelss' => [$Labels->id]
        ];
        $Task = Task::create([
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion']
        ]);
        $Task->Labelss()->sync($data['Labelss']);
        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->postJson("api/Task", $data);
        $response->assertStatus(201);
    }
    public function test_get_Tasks()
    {
        $user = User::factory()->create();
        $task = new Task();
        $task->titulo = "testTitulo";
        $task->descripcion = "testDescripcion";
        $task->save();
        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->getJson('api/Task');
        $response->assertStatus(200);
    }
    public function test_update_Task()
    {
        $user = User::factory()->create();
        $task = new Task();
        $task->titulo = "testTitulo";
        $task->descripcion = "testDescripcion";
        $task->save();
        $task->descripcion = "nuevoDescripcion";
        $updateResponse = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->putJson('api/Task/' . $task->id, [
                'titulo' => $task->titulo,
                'descripcion' => $task->descripcion
            ]);
        $updateResponse->assertStatus(200);
        $task = Task::find($task->id);
        $updateResponse->assertJsonFragment([
            'id' => $task->id,
            'titulo' => 'Título: ' . $task->titulo,
            'descripcion' => 'Descripción: ' . $task->descripcion,
            'Labelss' => []
        ]);
        $updateResponse->assertJsonMissing([
            'titulo' => 'Titulo: ' . "testTitulo",
            'descripcion' => 'Descripcion: ' . 'testDescripcion'
        ]);
    }
    public function test_delete_Task()
    {
        $user = User::factory()->create();
        $Labels = Labels::create([
            'nombre' => 'Hola'
        ]);
        $data = [
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba',
            'Labelss' => [$Labels->id]
        ];
        $Task = Task::create([
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion']
        ]);
        $Task->Labelss()->sync($data['Labelss']);
        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->deleteJson("api/Task/{$Task->id}");
        $response->assertStatus(200);
        $this->assertDatabaseMissing('Tasks', ['id' => $Task->id]);
    }
    public function test_show_Task()
    {
        $user = User::factory()->create();
        $Task = Task::create([
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba'
        ]);
        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->getJson("api/Task/{$Task->id}");
        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                'id' => $Task->id,
                'titulo' => 'Título: ' . $Task->titulo,
                'descripcion' => 'Descripción: ' . $Task->descripcion,
            ]
        ]);
    }
}
