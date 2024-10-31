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
</div>

@endsection
