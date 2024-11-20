
@extends('layouts.plantilla')
@section('titulo','Clientes')

@section('contenido')



    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

    @foreach ($consultaClientes as $cliente)

    

    <div class="card text-justify font-monospace mt-4">

        <div class="card-header fs-5 text-primary">
            {{ $cliente->nombre}}

        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{ $cliente->correo}}</h5>
            <h5 class="fw-medium">{{ $cliente->telefono}}</h5>
            <p class="card-text fw-lighter"> </p>


        </div>

        <div class="card-footer text-muted">
            <form action="{{ route('rutaFormularioEditar',$cliente->id)}}">
            <button type="submit" class="btn btn-warning btn-sm">{{__('Update')}}</button>
            </form>

            <button type="submit" class="btn btn-danger btn-sm">{{__('Delete')}}</button>
        </div>
    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

@endsection()