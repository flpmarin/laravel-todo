<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Aquí puedes cambiar el título dinámicamente -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- CSS -->
</head>
<body>
    <header>
        <h1>To do List</h1>
    </header>

    <div class="container">
        @yield('content') <!-- Aquí se insertará el contenido específico de cada vista -->
    </div>

    <footer>
        <p>&copy; 2024 Mi Aplicación</p>
    </footer>
</body>
</html>
