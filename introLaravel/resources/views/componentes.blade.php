@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
    Soy el contenido del primero
</x-Card>

<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="No Guardar">
    Otro gaaaato!!!
</x-Card>

@endsection