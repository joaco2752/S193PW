
@extends('layouts.plantilla')
@section('titulo','Clientes')

@section('contenido')

    

    {{-- Inicia tarjetaCliente --}}


    @if(session('exito'))
    <x-Alert tipo="success"> {{ session('exito')}} </x-Alert>
    @endif

    @session('exito')
    <x-Alert tipo="warning">{{$value}}</x-Alert>
    @endsession

    @session('exito')

    <script>
        Swal.fire({
    title: "Respuesta servidor",
    text: "{{$value}}",
    icon: "success"
    });
    </script>

    @endsession
    
    <div class="container mt-5 col-md-8">

    @foreach ($consulta as $cliente)
    

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre }}  {{$cliente->apellido }}

        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{$cliente->correo }}</h5>
            <h5 class="fw-medium">{{$cliente->telefono }}</h5>
            <p class="card-text fw-lighter"> </p>


        </div>

        <div class="card-footer text-muted">
            <form action="{{ route('cliente.edit', $cliente->id)}}" method="GET" style="display: inline;">
            <button type="submit" class="btn btn-warning btn-sm">{{__('Update')}}</button>
            </form>
            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-inline" onsubmit="return confirmarEliminacion('{{ $cliente->nombre }}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                    </form>
        </div>
    </div>
    @endforeach
    </div>
            
            <script>
                function confirmarEliminacion(nombre) {
                    return confirm('¿Está seguro de que desea ELIMINAR los datos del cliente {{$cliente->nombre}}?');
                }
            </script>
    {{-- Finaliza tarjetaCliente --}}

@endsection()