<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $tasks = Task::all(); // Recupera todas las tareas de la base de datos
        return view('task.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->back();
    }
}
