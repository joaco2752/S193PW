<!DOCTYPE html>
<html lang="en">
<head>
                                    {{--Soy la plantilla para formulario y cliente--}}


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaInicio')}}"> Turista sin Maps</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cliente.create')?'text-warning':'' }}" aria-current="page" href="{{ route('cliente.create')}}">Registro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ request()->routeIs('cliente.index')?'text-warning':'' }}" href="{{ route('cliente.index')}}">Consulta Clientes</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
        
    

    @yield('contenido')
</body>
</html>