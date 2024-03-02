<?php

namespace App\Http\Controllers;

use App\Models\Task;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $Tasks = Task::all();
        // return response()->json($productos,200);
        return TaskResource::collection($Tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $etiquetas = $request->labels;
        $params = $request->all();
        unset($params["labels"]);
        $Task = Task::create($params);
        $Task->labels()->attach($etiquetas);
        
        return response()->json($Task, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResource
    {
        $Task = Task::find($id);
        // return response()->json($producto,200);

        return new TaskResource($Task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $Task)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, $id): JsonResource
    {

        $Task = Task::find($id);
        $Task->labels()->detach();
        $Task->titulo = $request->titulo;
        $Task->descripcion = $request->descripcion;
        $Task->labels()->attach($request->etiquetas);
        $Task->save();



        return new TaskResource($Task);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $Task)
    {
        $Task->labels()->detach();
        $Task->delete();
        return response()->json($Task, 200);
    }
}
