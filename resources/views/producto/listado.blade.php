@extends('layout.master')
@section('content')
@if(count($productos)===0)

<script type="text/javascript">
    function activarPro() 
    {
        var respuesta =  confirm("Desea activar la producto??");
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
        
    }
    function desactivarPro() {
        var respuesta =  confirm("Desea desactivar la producto??");
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
        
    }
</script>

<div class="container" align="center"> 
    <div class="row">
       
        <div class="col-md-4">
            <div class="card" style="width: 68rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay productos registrados </h1>
                </div>
                <div >
                    <a class="btn btn-success" href='{{url()->previous()}}'> Regresar </a>
                </div></br></br>

                <div class="card-body">
                    <h1 class="card-title"> REGISTRAR</h1>
                </div>
                <div >
                <a href="{{ url('productos/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i> Nuevo </a> 
                </div></br></br>
            </div>
        </div>
    </div>
</div>
</br></br></br></br></br></br></br></br></br></br>

@else

    <header class="main-box-header clearfix">
        <div class="form-row mb-4">
            <div class="col">
                <h2 class="box-title" style="color: black">Productos                      
                <a href="{{ url('productos/registro') }}" class="btn btn-success" > <i class="fa fa-plus-circle"></i> Nuevo </a> 
                </h2>
            </div>

            <div class="col"> </div>
                <div class="col">
                    <form action='{{url("productos/consulta")}}' method= "POST" class="form-inline md-form mr-auto mb-4">
                        @csrf
                        <input   type="text" id="codigo" name="codigo"  class="form-control" placeholder="Ingrese codigo" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
                    </form> 
                    <div class="letra" style="color: black">
                    <div class=" dropdown show" id="sidebar-nav">        
                        <a  class=" boton_2 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black"> 
                            Ordenar por    
                        </a> 

                        <div class="dropdown-menu " aria-labelledby="dropdownMenu2" >
                            <a class="dropdown-item descripcion_2 " href='{{ route("porProducto") }}' >Nombre</a>
                            <a class="dropdown-item descripcion_2 " href='{{ route("porCategoria") }}' >Categoria</a>
                            <a class="dropdown-item descripcion_2 " href='{{ route("porPrecio") }}'>Precio</a>
                        </div>
                    </div> 
                </div> 
                </br></br>   
            </div>
        </div>
    </header>

                <div class="container" align="center"> 
                    <div class="row">
                        @foreach($productos as $p)
                        <div class="col-md-3">
                            <div class="card" style="width: 20rem;">
                           
                                <div class="letra" align="center">
                                    <h4> {{ $p->nombreProducto}} </h4>
                                </div>
                                <img src='{{url("/imagenes/productos/$p->foto")}}' class="rounded" alt="..." height="200">
                                <div align="center">
                                    <h6 class="letra"> Precio: {{$p->precio}} </h6>
                                    <h6 class="letra"> {{$p->nombreCategoria}} </h6>
                                    <h6 class="letra"> Estado: {{$p->estado}} </h6>

                                    @if($p->estado==1)
                                    <span class="label bg-primary">Activado</span>
                                    @else
                                    <span class="label bg-warning">Desactivado</span>
                                    @endif
                                </div>
                                <a class="btn btn-warning" href="#" role="button" data-toggle="collapse" data-target="#comprar{{$p->id}}">Comprar</a>
                                <form id="comprar{{$p->id}}" class="letra collapse" action='{{url("productos/comprar")}}' method= "POST">
                                    @csrf
                                    <!-- Etiquetas de tipo text con un value asignado -->
                                    <div class="form-group">
                                        <label for="cantidad">¿Cuántos ejemplares desea adquirir?</label>
                                        <label style="background-color: light !important;">({{$p->cantidad}} unidades)</label>
                                        <input required type="number" min='1' max='{{$p->cantidad}}' id="cantidad" name="cantidad"  class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                    </div>
                                    <!-- Etiquetas de tipo button -->
                                    <div align="center"><button type="submit" >Añadir al carrito</button></div>
                                </form>
                                <a href='{{url("productos/detalle/$p->id" )}}' class="btn btn-primary" > Ver detalles </a>                    
                            </div>  
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>
@endif   
@stop