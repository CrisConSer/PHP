<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tarea_etiqueta', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tarea_id")->constrained('tasks'); // Cambiando 'tareas' por 'tasks'
            $table->foreignId("etiqueta_id")->constrained('labels'); // Asumiendo que 'etiquetas' es el nombre correcto de la tabla
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tarea_etiqueta');
    }
};
