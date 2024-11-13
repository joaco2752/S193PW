<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaPrincipio')}}">{{__('Principal')}}</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rutaRegistro')?'text-light':'' }}" aria-current="page" href="{{ route('rutaRegistro')}}">{{__('Registro Libro')}}</a>
                </li>
                </ul>
            </div>

        </div>
</nav>





    @yield('contenido')

            
            <footer class="bg-dark text-white mt-5 py-3">
            <blockquote class="blockquote mb-0">
            <p>{{__('Biblioteca The Last Read')}}</p>
                <footer>Copyright &copy; 31/10/2024</cite></footer>
                </blockquote>
            </footer>
    
            
</body>
</html>