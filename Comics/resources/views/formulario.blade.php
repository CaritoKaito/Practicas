@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Formulario</h1>
<br>
<div>
    <div>
        <div class="text-center">
            Bienvenido, por favor completa la siguiente informacion <i class="bi bi wechat"></i>
        </div>
<br>
    <div>
        <form method="post" action="guardarDatos">
            @csrf 
            <div>
                <label  class= "form label" name="labelNombre">Ingresa tu nombre(s): </label>
                <input type="text" class="form-control" name="txtNombre">
            </div>
<br>
            <div>
                <label  class= "form label" name="labelApellido">Ingresa tus apellidos: </label>
                <input type="text" class="form-control" name="txtApellido">
            </div>
<br>
            <div>
                <label  class= "form label" name="labelEdad">Ingresa tu edad: </label>
                <input type="text" class="form-control" name="txtEdad">
            </div>
<br>
            <div>
                <label class="form-label" name="labelDescripcion"> Describe tus habilidades:</label>
                <textarea class="form-label" name="txtDescripcion" row="3"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" name="btnGuardar">Guardar</button>
            <form> 
        </div>
    </div>
</div>

@stop 