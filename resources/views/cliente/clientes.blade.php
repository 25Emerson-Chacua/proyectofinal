@extends('layout.master')
@section('content')
<body >
<div class="row">
        </div>
<div class="row">
<div class="col-lg-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <header class="main-box-header clearfix">
                    <h2 class="box-title">Clientes                           
                                <!-- First name -->
                                <a href="{{ url('/clientes/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i> Nuevo </a>
                            </h2>
                </header> clientes/registro
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover" id="tbllistado">
                            <thead>
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
                                        <button class="btn btn-warning" ><i class="fa fa-pencil"></i></button>
                                        @if($c->estado==1)
                                            <button class="btn btn-danger" > <i class="fa fa-trash"> </i></button>
                                        @else
                                            <button class="btn btn-primary" ><i class="fa fa-check"></i></button>
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