@extends('layouts.plantilla')
@section('titulo','Registro')

@section('contenido')

<div class="container mt-4">


    

    @session('perfecto')
    <script>
        Swal.fire({
  title: "",
  text: "{{ $value}}",
  icon: "success"
});
    </script>
    @endsession


    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
        {{__('Registro de Libro')}}
        </div>

    <form class="row g-3" action="/enviarRegistroLibro" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="isbn" class="form-label">{{__('ISBN (Identificador Libro):')}}</label>
        <input type="text" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
        <small>{{ $errors->first('txtisbn')}}</small>
    </div>
    <div class="col-md-6">
        <label for="titulo" class="form-label">{{__('Titulo:')}}</label>
        <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
        <small>{{ $errors->first('txttitulo')}}</small>
    </div>
    <div class="col-6">
        <label for="autor" class="form-label">{{__('Autor:')}}</label>
        <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
        <small>{{ $errors->first('txtautor')}}</small>
    </div>
    <div class="col-6">
        <label for="paginas" class="form-label">{{__('Paginas:')}}</label>
        <input type="text" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
        <small>{{ $errors->first('txtpaginas')}}</small>
    </div>
    <div class="col-6">
        <label for="año" class="form-label">{{__('Año:')}}</label>
        <input type="text" class="form-control" name="txtaño" value="{{old('txtaño')}}">
        <small>{{ $errors->first('txtaño')}}</small>
    </div>
    <div class="col-6">
        <label for="editorial" class="form-label">{{__('Editorial:')}}</label>
        <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}">
        <small>{{ $errors->first('txteditorial')}}</small>
    </div>
    <div class="col-6">
        <label for="correo" class="form-label">{{__('Email de Editorial:')}}</label>
        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
        <small>{{ $errors->first('txtcorreo')}}</small>
    </div>
    <div class="d-inline-flex gap-1">
    <button type="submit" class="btn btn-primary">{{__('Registrar')}}</button>
    </div>
    </form>
    </div>

@endsection