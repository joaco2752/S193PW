@extends('layouts.plantilla')
@section('titulo','Principal')

@section('contenido')

<div class="container mt-4">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/noticialiteraria.jpg')}}">
    </div>
  </div>
</div>

<div class="card tarjeta-especial">
  <img src="{{ asset('img/noticia de un secuestro.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gabriel Garcia Márquez</h5>
    <p class="card-text">Tras obras como Del amor y otros demonios (1994) y Noticia de un secuestro (1996) publica en 2002 Vivir para contarla, donde narra aspectos biográficos de su infancia y juventud. Sus últimas obras publicadas son Memoria de mis putas tristes (2004) y Yo no vengo a decir un discurso (2010)</p>
  </div>
</div>
</div>

@endsection
