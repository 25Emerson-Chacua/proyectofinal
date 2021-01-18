@extends('layout.master')
@section('content')
<body >
<div class="row"></div>
<div class="row">
    <div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                
                <form action="{{route('actualizarCliente', $clientes->id )}}" method= "POST"> 
                    @csrf

                    <p class="h4 mb-4">Formulario de Actualizacion</p>
                    <div class="form-group">
                        <label for="nombrePro">Nombre </label>
                        <input type="text" id="nombrecli" name="nombrecli" value="{{$clientes->nombreCliente}}" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
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
            
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
                <button type="button" class="btn btn-danger">Cancelar</button>
                </form>         
            </div>
        </div>
    </div>
</body>
@stop 