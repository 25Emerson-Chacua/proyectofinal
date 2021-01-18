@extends('layout.master')
@section('content')
<script type="text/javascript">
function activarCat() {
    var respuesta =  confirm("Desea activar la categoria??");
    if(respuesta == true){
        return true;
    }
    else{
        return false;
    }
    
}
function desactivarCat() {
    var respuesta =  confirm("Desea desactivar la categoria??");
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
                            <h2 class="box-title">Categorias                         
                                <a href="{{ url('/categorias/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i> Nuevo </a> 
                            </h2>
                        </div>
                        <div class="col"> </div>
                        <div class="col"></div>
                        
                    </div>   
                       
                </header>

                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <thead class="black white-text">
                                <tr>
                                    <th >Op</th>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorias as $c)
                                <tr>
                                
                                    <td>
                                        
                                        @if($c->estado==1)
                                        <a href="{{route('form_actualizaCategoria', $c->id)}}"class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('eliminarCategoria', $c->id)}}" class="btn btn-danger" onclick="return desactivarCat()"><i class="fa fa-close"></i></a>
                                        @else
                                        

                                        <a href="{{route('activarCategoria', $c->id)}}"class="btn btn-primary" onclick="return activarCat()"><i class="fa fa-check"></i></a>
                                        @endif  
                                        
                                    </td>
                                    <td> {{ $c->id }} </td>
                                    <td> {{ $c->nombreCategoria }} </td>
                                    <td> {{ $c->descripcion }} </td>

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