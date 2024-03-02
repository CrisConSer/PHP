<?php

namespace App\Http\Controllers;

use App\Models\Labels;

use App\Http\Requests\LabelsRequest;
use App\Http\Resources\LabelsResource;

use Illuminate\Http\Resources\Json\JsonResource;


class LabelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $Labelss = Labels::all();

        return LabelsResource::collection($Labelss);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabelsRequest $request)
    {

        $params = $request->all();
     
        $Labels=Labels::create($params);
        return response()->json($Labels, 201);
            
    }


    /**
     * Display the specified resource.
     */

    public function show($id):JsonResource

    {
        $Labels = Labels::find($id);
      

return new LabelsResource($Labels);
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Labels $Labels)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabelsRequest $request, $id): JsonResource
    {
        try {
            $Labels = Labels::find($id);
    
            if (!$Labels) {
                return response()->json(['error' => 'La Labels no se encontró'], 404);
            }
    
            $Labels->update($request->all());
    
            return new LabelsResource($Labels);
        } catch (\Exception $e) {
            return response()->json(['message' => 'No se pudo actualizar', 'error' => $e->getMessage()], 500);
        }
    }
    


public function destroy($id)
{
    try {
        $Labels = Labels::findOrFail($id); 
        // Desvincula todas las relaciones de las tareas antes de eliminar la etiqueta
        $Labels->task()->detach(); 
        $Labels->delete(); 
        return response()->json(['message' => 'Labels eliminada correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'No se pudo eliminar la Labels', 'error' => $e->getMessage()], 500);
    }
}

    
}
