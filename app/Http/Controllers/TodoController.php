<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // Order by 'isDone' first (false first), then by 'due_date'
        $todos = Todo::orderBy('isDone', 'asc')->orderBy('due_date', 'asc')->get();

        return view('ToDoList', [
            'todos' => $todos
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'required|date',
        ]);

        Todo::create($attributes);

        return redirect('ToDoList');
    }

    public function update(Todo $todo)
    {
        $todo->update(['isDone' => true]);

        return redirect('ToDoList');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('ToDoList');
    }
}
