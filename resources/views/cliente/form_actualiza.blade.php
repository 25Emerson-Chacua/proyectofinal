@extends('layout.master')
@section('content')

<div class="container"align="center">
<div class="row">
    <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                
                <form action="{{route('actualizarCliente', $clientes->id )}}" method= "POST"> 
                    @csrf

                    <p class="h4 mb-4">Formulario de Actualizacion</p>
                    <div class="form-group">
                        <label for="nombrePro">Nombre </label>
                        <input type="text" id="nombreCli" name="nombreCli" value="{{$clientes->nombreCliente}}" class="form-control" placeholder="..." required >
                    </div>

                    <!-- Etiquetas de tipo number -->
                    <div class="form-group">
                        <label for="cedulaPro">Cedula </label>
                        <input type="text" id='cedulaCli' name='cedulaCli' value="{{$clientes->cedula}}"  class="form-control" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="direccionPro">Direccion </label>
                        <input type="text" id='direccionCli' name='direccionCli' value="{{$clientes->direccion}}"   class="form-control" placeholder="...">
                    </div>

                    <div class="form-group">
                        <label for="telefonoPro">Teléfono </label>
                        <input type="text" id='telefonoCli' name='telefonoCli' value="{{$clientes->telefono}}"   class="form-control" placeholder="...">
                    </div>

                    <div class="form-group">
                        <label for="materialRegisterFormFirstName">Genero</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="generoCli" id="m"  value="M"required />
                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="generoCli" id="f" value="F"/>
                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                        </div>
                    </div>
                    <button type="submit" class="boton_personalizado">Actualizar</button>
                    <button type="reset" class="boton_personalizado">Restablecer</button><br>
                    <a href="javascript: history.go(-1)" role="button" class="boton_personalizado_1">Cancelar</a>
                </form>         
            </div>
        </div>
    </div>

@stop 