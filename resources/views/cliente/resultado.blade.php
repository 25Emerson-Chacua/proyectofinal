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
                            <h2 class="box-title">Cliente                          
                                
                            </h2>
                        </div>
                        <div class="col">
                        
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
                                <tr>
                                
                                    
                                        
                                    <td>

                                        @if($producto->estado==1)
                                        <a href="{{route('form_actualizaCliente', $producto->id)}}"class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('eliminarCliente', $producto->id)}}" class="btn btn-danger" onclick="return desactivar()"><i class="fa fa-close"></i></a>
                                        @else
                                        

                                        <a href="{{route('activarCliente', $producto->id)}}"class="btn btn-primary" onclick="return activar()"><i class="fa fa-check"></i></a>
                                        @endif  
                                        
                                    </td>
                                    <td>  {{$producto->id}} </td>
                                    <td> {{ $producto->nombreCliente }} </td>
                                    <td> {{ $producto->cedulaCliente }} </td>
                                    <td> {{ $producto->DireccionCliente }} </td>
                                    <td> {{ $producto->telefonoCliente }}</td>
                                    <td> {{ $producto->generoCliente }}</td>
                                    <td> 
                                    @if($producto->estado==1)
                                    <span class="label bg-primary">Activado</span>
                                    @else
                                    <span class="label bg-warning">Desactivado</span>
                                    @endif 
                                    
                                    </td>
                                    <td> 
                                    
                                                                        
                                </tr>
                                
                            </tbody>
                            </table>
                            <div class="container">
                                <a href="{{route('listadoClientes')}}" class="btn btn-success" >Regresar </a>
                            </div>
                    </div>

                </div>
               
                                  
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
</body>
@stop 