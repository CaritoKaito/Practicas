@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center text-blue"> <i class="bi bi-card-checklist"></i> Recuerdos </h1>
<div class="container col-md-6">
    @foreach ($consultaRecuerdos as $consulta)
    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>{{ $consulta->fecha }} </h5>

        <div class="card-body">
         <h5 class="card-title fw-semibold"> {{$consulta->titulo}} </h5>  
         <p class="card-text fw-light"> {{ $consulta->recuerdo}} </h5>   
        </div>

        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
        <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-outline-warning">Editar<i class="bi bi-pencil"></i></a>
        <a href="{{route('recuerdo.confirm',$consulta->idRecuerdo)}}" class="btn btn-outline-danger">Eliminar<i class="bi bi-trash"></i></a>    
        </div>
    </div> 
@endforeach
</div>

@stop