@extends('plantilla')
@section('contenido')


@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo','Tu formulario se esta procesando','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> 
@endif

<h1 class="mt-4 display-1 text-center">Formulario</h1>
<br>
<div>
    <div>
        <div class="text-center">
            Bienvenido, por favor completa la siguiente informacion <i class="bi bi wechat"></i>
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
        <form method="post" action="guardarDatos">
            @csrf 
            <div>
                <label  class= "form label" name="labelNombre">Ingresa el nombre: </label>
                <input type="text" class="form-control" name="txtNombre"value="{{ old('txtNombre')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
            </div>

            <div>
                <label  class= "form label" name="labelApellido">Ingresar Apellido: </label>
                <input type="text" class="form-control" name="txtApellido" value="{{ old('txtApellido')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtApellido')}}</p>
            </div>

            <div>
                <label  class= "form label" name="labelEdad">Ingresar Edad: </label>
                <input type="text" class="form-control" name="txtEdad" value="{{ old('txtEdad')}}">
                <p class="fw-bold text-danger">{{$errors->first('txtEdad')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelDescripcion"> Descripcion:</label>
                <textarea class="form-label" name="txtDescripcion" row="3" value="{{ old('txtDescripcion')}}"></textarea>
                <p class="fw-bold text-danger">{{$errors->first('txtDescripcion')}}</p>
            </div>
        </div>
        <div>
            <button type="submit" name="btnGuardar">Guardar</button>
            <form> 
        </div>
    </div>
</div>

@stop 