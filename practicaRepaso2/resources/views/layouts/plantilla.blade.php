<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaPrincipio')}}">Principal</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rutaRegistro') }}" aria-current="page" href="{{ route('rutaRegistro')}}">Registro Libro</a>
                </li>
                </ul>
            </div>
        </div>
</nav>



    @yield('contenido')
</body>
</html>