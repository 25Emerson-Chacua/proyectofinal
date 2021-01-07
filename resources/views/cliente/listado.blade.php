@extends('layout.master')
@section('content')
<script type="text/javascript">
function activar() {
    var respuesta =  confirm("Desea activar el cliente??");
    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
    
}
function desactivar() {
    var respuesta =  confirm("Desea desactivar el cliente??");
    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
    
}
</script>
<body >
<div class="row">
        </div>
<div class="row">
<div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">

                    <div class="form-row mb-4">
                        <div class="col">
                            <h2 class="box-title">Clientes                           
                                <a href="{{ url('/clientes/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i> Nuevo </a> 
                            </h2>
                        </div>
                        <div class="col"> </div>
                        <div class="col">
                            <form action="{{route('consulta_cliente')}}" method= "POST" class="form-inline md-form mr-auto mb-4">
                                 @csrf
                                <input  class="form-control mr-sm-2" type="text" name="busqueda" id="busqueda" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
                            </form>  
                        </div>
                    </div>   
                       
                </header>

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="black white-text">
                                <tr>
                                    <th>Op</th>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Cedula</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Genero</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $c)
                                <tr>
                                
                                    <td>
                                        
                                        @if($c->estado==1)
                                        <a href="{{route('form_actualizaCliente', $c->id)}}"class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('eliminarCliente', $c->id)}}" class="btn btn-danger" onclick="return desactivar()"><i class="fa fa-close"></i></a>
                                        @else
                                        

                                        <a href="{{route('activarCliente', $c->id)}}"class="btn btn-primary" onclick="return activar()"><i class="fa fa-check"></i></a>
                                        @endif  
                                        
                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->nombreCliente }} </td>
                                    <td> {{ $c->cedulaCliente }} </td>
                                    <td> {{ $c->DireccionCliente }} </td>
                                    <td> {{ $c->telefonoCliente }}</td>
                                    <td> {{ $c->generoCliente }}</td>
                                    <td> 
                                    @if($c->estado==1)
                                    <span class="label bg-primary">Activado</span>
                                    @else
                                    <span class="label bg-warning">Desactivado</span>
                                    @endif    
                                                                        
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                </div>
                         
            </div>
        </div>
    </div>
</body>
@stop 