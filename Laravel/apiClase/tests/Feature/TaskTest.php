<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;
use App\Models\User;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_tareas()
    {
        $user = User::factory()->create();

        $tareas = new Task();
        $tareas->nombre = "Prueba";
        $tareas->descripcion = "Prueba - Test";
        $tareas->save();

    
        $response = $this->actingAs($user)->withSession(['banned' => false])->getJson('api/tareas');
        $response->assertStatus(200);

        $response->assertJsonFragment([
            'id' => $tareas->id,
            'nombre' => 'Nombre: ' .$tareas->nombre,
            'descripcion' => 'Descripcion: ' .$tareas->descripcion,
            'Inventado' => 'Inventado: ',
            'etiqueta' => $tareas->etiquetas!=null?$tareas->etiquetas->pluck('nombre'):[]
        ]);
    }
    
    public function test_update_tarea()
    {

        $user = User::factory()->create();

        // Crear una tarea para ser actualizada
        $tarea = new Task();
        $tarea->nombre = "Prueba Titulo";
        $tarea->descripcion = "PruebaDescripcion";
        $tarea->save();

        // Datos de actualización
        $updatedData = [
            'nombre' => 'NuevoTitulo',
            'descripcion' => 'NuevaDescripcion',
        ];

        // Enviar una solicitud de actualización a la API
        $response = $this->actingAs($user)->withSession(['banned' => false])->putJson("api/tareas/{$tarea->id}", $updatedData);
        $response->assertStatus(200);

        // Refrescar el modelo desde la base de datos
        $tarea->refresh();

        // Verificar que la tarea ha sido actualizada en la base de datos
        $this->assertEquals($updatedData['nombre'], $tarea->nombre);
        $this->assertEquals($updatedData['descripcion'], $tarea->descripcion);
    }
    public function test_delete_tarea()
    {   
        $user = User::factory()->create();

        // Crear una tarea para ser eliminada
        $tarea = new Task();
        $tarea->nombre = "Prueba";
        $tarea->descripcion = "PruebaDescripcion";
        $tarea->save();

        // Enviar una solicitud de eliminación a la API
        $response = $this->actingAs($user)->withSession(['banned' => false])->deleteJson("api/tareas/{$tarea->id}");
        $response->assertStatus(200);

        // Verificar que la tarea ha sido eliminada de la base de datos
        $this->assertNull(Task::find($tarea->id));
    }

    public function test_insert_tarea()
    {
        $user = User::factory()->create();

        // Datos de la nueva tarea
        $newTareaData = [
            'nombre' => 'NuevoTitulo',
            'descripcion' => 'NuevaDescripcion',
        ];

        // Enviar una solicitud de inserción a la API
        $response = $this->actingAs($user)->withSession(['banned' => false])->postJson('api/tareas', $newTareaData);
        $response->assertStatus(201); // Verificar que la tarea ha sido creada exitosamente

        // Verificar que la tarea ha sido insertada en la base de datos
        $this->assertDatabaseHas('tareas', [
            'nombre' => $newTareaData['nombre'],
            'descripcion' => $newTareaData['descripcion'],
        ]);
    }
}