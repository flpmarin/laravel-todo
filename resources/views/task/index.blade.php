@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body, html {
        height: 100%;
    }

    .contenedor {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 0 20px;
    }

    form {
        display: flex;
        width: 100%;
        max-width: 600px;
        margin-bottom: 20px;
    }

    input[type="text"] {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 10px;
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin-top: 20px;
        width: 100%;
        max-width: 600px;
    }

    li {
        background-color: #f4f4f4;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .task-info {
        display: flex;
        flex-direction: column;
    }

    .task-buttons {
        display: flex;
        gap: 10px;
    }

    .delete-btn {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .delete-btn:hover {
        background-color: darkred;
    }
</style>

<div class="contenedor">
    <h2>Lista de Tareas</h2>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nueva tarea">
        <input type="text" name="description" placeholder="Descripción de la tarea">
        <button type="submit">Agregar</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <div class="task-info">
                    <strong>{{ $task->name }}</strong>
                    <small>{{ $task->description }}</small>
                </div>
                <div class="task-buttons">
                    <!-- Formulario de eliminación -->
                    <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
