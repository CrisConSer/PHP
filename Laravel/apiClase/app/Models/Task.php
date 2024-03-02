<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ["titulo", "descripcion"];
    protected $hidden = ["created_at", "updated_at"];

    // Corregir el nombre del método para la relación con Labels
    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(
            Labels::class, // Cambiar 'Labels' por 'Label' si es necesario
            'tarea_etiqueta',
            'tarea_id',
            'etiqueta_id'
        );
    }
}
