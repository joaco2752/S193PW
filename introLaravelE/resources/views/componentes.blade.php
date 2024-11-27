@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')

<x-card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
    Soy el contenido del primero
</x-card>

<x-card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="No Guardar">
    Otro gaaaato!!!
</x-card>

<x-Alert tipo="danger">rojo</x-Alert>
<x-Alert tipo="warning">amarillo</x-Alert>

@endsection