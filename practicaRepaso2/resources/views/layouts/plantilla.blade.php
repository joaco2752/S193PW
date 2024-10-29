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
            <a class="navbar-brand" href="{{ route('')}}">Registro</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('') }}" aria-current="page" href="{{ route('')}}"></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="card-footer text-body-secondary">
        <p>Biblioteca LastRead<br>
        Copyright © 2024 Biblioteca LastRead<br>
        28/10/2024
        </p>
</div>


    @yield('contenido')
</body>
</html>