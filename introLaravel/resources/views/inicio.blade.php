<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio</title>
    @vite(['resources/js/app.js'])

    <style>
        body, html{
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>

</head>
<body>

  <div class="d-flex flex-column justify-content-center align-items-center full-height">

   <h1 class="display-1">{{__('Bienvenido Turista')}}</h1>
   <p>{{__('Presiona el boton para iniciar...')}}</p>

   <!-- <a href="" class="btn btn-primary">Ir al registro</a> -->
   <a href="/form" class="btn btn-danger">{{__('Go to register')}}</a>
   <a href="{{ route('rutaFormulario')}}" class="btn btn-primary">{{__('Go to register')}}</a>
   
  </div>
    
</body>
</html>