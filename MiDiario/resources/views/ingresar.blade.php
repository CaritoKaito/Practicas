@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo','Tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
@endif

<h1 class="mt-4 display-1 text-center">Ingresar</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
        <div class="card-header text-center text-primary">
            Querido diario...!!! <i class="bi bi wechat"></i>
        </div>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong> Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
    @endif

    <div>
        <form method="post" action="{{ route('recuerdo.store') }}">
            @csrf 
            <div>
                <label  class= "form label" name="labelTitulo">Titulo: </label>
                <input type="text" class="form-control" name="txtTitulo" value="{{ old('txtTitulo')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtTitulo')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelRecuerdo"> Recuerdo:</label>
                <textarea class="form-control" name="txtRecuerdo" row="3" value="{{ old('txtRecuerdo')}}"></textarea>
                <p class="fw-bold text-danger">{{$errors->first('txtRecuerdo')}}</p>
            </div>
        </div>
        <div>
            <button type="sumit" name="btnGuardar">Guardar</button>
            <form> 
        </div>
    </div>
</div>

@stop