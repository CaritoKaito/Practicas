@extends('plantilla')
@section('contenido')

@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo','Tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
@endif

<h1 class="mt-4 display-1 text-center">Editar Recuerdo</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>
    

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong> Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
    @endif

    <div class="card-header text-center text-primary">
            Correcciones a mis recuerdos! <i class="bi bi wechat"></i>
        </div>

    <div class="card-body">
        <form method="post" action="{{ route('recuerdo.update', $recuerdoid->idRecuerdo)}}">
            @csrf 
            {!! method_field('PUT')!!}
            <div class="mb-3">
                <label  class= "form label" name="labelTitulo">Titulo: </label>
                <input type="text" class="form-control" name="txtTitulo" value="{{ $recuerdoid->titulo }}">
                <p class="fw-bold text-danger">{{$errors->first('txtTitulo')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label" name="labelRecuerdo"> Recuerdo:</label>
                <input class="form-control" name="txtRecuerdo" row="3" value="{{ $recuerdoid->recuerdo }}"></input>
                <p class="fw-bold text-danger">{{$errors->first('txtRecuerdo')}}</p>
            </div>
        </div>
        <div>
            <button type="sumit" class= "btn btn-info" name="btnActualizar">Actualizar</button>
            <form> 
        </div>
    </div>
</div>

@stop