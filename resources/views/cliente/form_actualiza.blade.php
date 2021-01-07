@extends('layout.master')
@section('content')
<body >
<div class="row"></div>
<div class="row">
    <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                
                <form class="text-center border border-light p-5" action="{{route('actualizarCliente', $clientes->id )}}" method= "POST"> 
                    @csrf

                    <p class="h4 mb-4">Formulario de Actualizacion</p>
                    <div class="form-group">
                        <label for="nombrecli">Nombre </label>
                        <input type="text" id="nombrecli" name="nombrecli" value="{{$clientes->nombreCliente}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <!-- Etiquetas de tipo number -->
                    <div class="form-group">
                        <label for="cedula">Cedula </label>
                        <input type="text" id='cedula' name='cedula' value="{{$clientes->cedulaCliente}}"  class="form-control" placeholder="Cantidad">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion </label>
                        <input type="text" id='direccion' name='direccion' value="{{$clientes->DireccionCliente}}"   class="form-control" placeholder="Cantidad">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono </label>
                        <input type="text" id='telefono' name='telefono' value="{{$clientes->telefonoCliente}}"   class="form-control" placeholder="Cantidad">
                    </div>

                    <div class="form-group">
                        <label for="materialRegisterFormFirstName">Genero</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="m"  value="M"required />
                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="f" value="F"/>
                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                        </div>
                    </div>
            
                    <div class="form-row mb-4">
                        <div class="col"></div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                        <div class="col">
                            <a href="{{route('listadoClientes')}}"class="btn btn-danger" > <i class="fa fa-arrow-circle-left"></i> Volver </a>
                        </div>
                        <div class="col"></div>
                    </div>
                </form>         
            </div>
        </div>
    </div>
</body>
@stop 