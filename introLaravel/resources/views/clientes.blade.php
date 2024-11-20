
@extends('layouts.plantilla')
@section('titulo','Clientes')

@section('contenido')



    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
    @session('exito')
        <script>
        Swal.fire({
        title: "Cliente Actualizado",
        text: "{{$value}}",
        icon: "success"});
        </script>
        @endsession

        @session('seguro')
        <script>
            Swal.fire({
                title: '¡Eliminación Exitosa!',
                text: 'El usuario ha sido eliminado.',
                icon: 'success'
            });
        </script>
    @endsession

        

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

            <form id="form-eliminar-{{ $cliente->id }}" method="POST" action="{{ route('rutaEliminar', $cliente->id)}}">
            @method('DELETE')
            @csrf
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminacionModal{{ $cliente->id }}">
                    {{__('Delete')}}
                </button>
            </form>
            <div class="modal fade" id="confirmarEliminacionModal{{ $cliente->id }}" tabindex="-1" aria-labelledby="confirmarEliminacionModalLabel{{ $cliente->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmarEliminacionModalLabel{{ $cliente->id }}">Confirmación de Eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro de que quieres eliminar este cliente? No podrás revertir esta acción.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-danger" onclick="document.getElementById('form-eliminar-{{ $cliente->id }}').submit();">Sí, eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

@endsection()