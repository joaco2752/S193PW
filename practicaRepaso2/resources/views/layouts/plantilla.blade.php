<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])

    <title>@yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaPrincipio')}}">Principal</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rutaRegistro')?'text-light':'' }}" aria-current="page" href="{{ route('rutaRegistro')}}">Registro Libro</a>
                </li>
                </ul>
            </div>

        </div>
</nav>





    @yield('contenido')
            
            <div class="bg-dark text-white mt-5 py-3">
            <blockquote class="blockquote mb-0">
            <p>Biblioteca The Last Read</p>
                <footer>Copyright &copy; 29/10/2024</cite></footer>
                </blockquote>
                </div>
            
</body>
</html>