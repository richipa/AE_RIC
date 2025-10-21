<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'AE_RIC')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background: #fafafa; color: #333; }
        header, footer { background: #e3e3e3; padding: 10px; border-radius: 8px; }
        nav a { margin-right: 10px; color: #007bff; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>Proyecto AE_RIC - Tienda Laravel</h1>
        <nav>
            <a href="{{ route('productos.index') }}">Inicio</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 AE_RIC - DAW Getafe</p>
    </footer>
</body>
</html>
