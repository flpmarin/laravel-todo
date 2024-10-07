@extends('layouts.app') 

@section('title', 'crear Tareas') <!-- Cambia el título dinámicamente -->

@section('content')
    <h2>Lista de Tareas</h2>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
@endsection
