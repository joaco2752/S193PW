<!DOCTYPE html>
<html lang="en">
<head>
                                    {{--Soy la plantilla para formulario y cliente--}}


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Plantilla</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaInicio')}}"> Turista sin Maps</a>
            <button class="navbar-toogler" type="button" data-bs-toogle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('rutaFormulario')}}">Registro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rutaClientes')}}">Consulta Clientes</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
        
    

    @yield('contenido')
</body>
</html>