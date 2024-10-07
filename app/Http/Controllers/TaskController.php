<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all(); // Recupera todas las tareas de la base de datos
        return view('task.index', compact('tasks'));
    }
}