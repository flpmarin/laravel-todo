@extends('layouts.app') 

@section('title', 'crear Tareas') <!-- Cambia el título dinámicamente -->

@section('content')
    <h2>Lista de Tareas</h2>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nueva tarea">
        <button type="submit">Agregar</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
@endsection
