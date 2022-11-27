@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center text-blue"> <i class="bi bi-card-checklist"></i> Confirmar Eliminacion </h1>
<div class="container col-md-6">
   <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Seguro que quieres eliminar este recuerdo!?</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
    </div>
    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i>{{ $recuerdoid->fecha }} </h5>

        <div class="card-body">
         <h5 class="card-title fw-semibold"> {{$recuerdoid->titulo}} </h5>  
         <p class="card-text fw-light"> {{ $recuerdoid->recuerdo}} </h5>   
        </div>

        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="{{route('recuerdo.destroy', $recuerdoid->idRecuerdo) }}"method="post">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-outline-danger">Si quiero Eliminarlo! </button>

            </form>       
        <a href="{{route('recuerdo.index')}}" class="btn btn-outline-warning">No.. regresar<i class="bi bi-trash"></i></a>    
        </div>
    </div> 

</div>

@stop