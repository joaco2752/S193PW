@extends('layouts.plantilla')
@section('titulo','Registro')

@section('contenido')

<div class="container mt-4">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro de Libro
        </div>

    <form class="row g-3" action="" method="POST">
    <div class="col-md-6">
        <label for="isbn" class="form-label">ISBN (Identificador Libro):</label>
        <input type="text" class="form-control" name="txtisbn">
    </div>
    <div class="col-md-6">
        <label for="titulo" class="form-label">Titulo:</label>
        <input type="text" class="form-control" name="txttitulo">
    </div>
    <div class="col-6">
        <label for="autor" class="form-label">Autor:</label>
        <input type="text" class="form-control" name="txtautor">
    </div>
    <div class="col-6">
        <label for="paginas" class="form-label">Paginas:</label>
        <input type="text" class="form-control" name="txtpaginas">
    </div>
    <div class="col-6">
        <label for="año" class="form-label">Año:</label>
        <input type="text" class="form-control" name="txtaño">
    </div>
    <div class="col-6">
        <label for="editorial" class="form-label">Editorial:</label>
        <input type="text" class="form-control" name="txteditorial">
    </div>
    <div class="col-6">
        <label for="correo" class="form-label">Email de Editorial:</label>
        <input type="text" class="form-control" name="txtcorreo">
    </div>
    <div class="d-inline-flex gap-1">
    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Registrar</button>
    </div>
    </form>
</div>

@endsection