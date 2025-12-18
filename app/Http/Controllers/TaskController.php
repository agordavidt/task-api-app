<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //view tasks all json
    public function index() {
        return Task::all();
    }

    public function store(Request $request){
        //validate and create
        $task = Task::create($request->validate([
            'title'=>'required|string|max:255'
        ]));


        return response($task, 201); // 201 means created.
    }

     public function update(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->update($request->only('is_completed', 'title'));
        
        return response()->json($task);
    }

    public function destroy($id) // The variable name must match or be present
    {
        $task = \App\Models\Task::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Deleted']);
    }

}
