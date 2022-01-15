<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\JsonResponse;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $default = Todo::paginate();

        return TodoResource::collection($default);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return TodoResource
     */
    public function store(Request $request)
    {
        /*$todo = Todo::create($request->validated());*/

        $todo = new Todo();
        $todo->fill($request->only($todo->getFillable()));
        $todo->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  Todo  $todo
     * @return TodoResource
     */
    public function show(Todo $todo)
    {
        return new TodoResource($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TodoRequest  $request
     * @param  Todo  $todo
     * @return TodoResource
     */
    public function update(TodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());

        return new TodoResource($todo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Todo  $todo
     * @return JsonResponse
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json("DELETED", 204);
    }
}
