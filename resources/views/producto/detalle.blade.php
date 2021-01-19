@extends('layout.master')
@section('content')

<script type="text/javascript">
    function activarPro() 
    {
<<<<<<< HEAD
        var respuesta =  confirm("¿Desea activar la categoria??");
=======
        var respuesta =  confirm("Desea activar el Producto??");
>>>>>>> 7dcb2995863eaa1e3c8871ba5bca1543d17073a4
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
        
    }
    function desactivarPro() {
<<<<<<< HEAD
        var respuesta =  confirm("¿Desea desactivar la categoria??");
=======
        var respuesta =  confirm("Desea desactivar el Producto??");
>>>>>>> 7dcb2995863eaa1e3c8871ba5bca1543d17073a4
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
        
    }
</script>

<div class="container"align="center"> 
    <div class="row">
       
        <div class="col-md-4">
            <div class="card" style="width: 109rem;">




<div  class="container">
    <div  class="row">
        <div  class="col-md-4">
        </div>       
        <div  class="col-md-4">
            <div align="center" class="card carta border" style=" width: 25rem;">
                <h2 align="center" class="letra ">{{$productos->nombreProducto}}</h2>
                <img src='{{url("/imagenes/productos/$productos->foto")}}' class="rounded" alt="..." height="250">
                <div >
                    <h5 class="text letra "> Identificador: {{$productos->id}} </h5>                    
                    <h5 class="text letra "> Cantidad: {{$productos->cantidad}} </h5>
                    
                    <h5 class="text letra "> Precio: {{$productos->precio}} </h5>
                    
                    <h5 class="text letra "> Categoria: #{{$productos->categoria}} {{$productos->nombreCategoria}} </h5>
                </div>
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <a href='{{url("productos/actualizar/$productos->id")}}' class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                    </div>
                    
                    <div class="col">
                        <!-- Last name -->
                        <a href='{{url("productos/eliminar/$productos->id")}}' class="btn btn-danger" onclick="return desactivarPro()"><i class="fa fa-close"></i></a>  
                                
                    </div>
                    <div class="col">
                        <a href="{{route('activarProducto', $productos->id)}}"class="btn btn-primary" onclick="return activarPro()"><i class="fa fa-check"></i></a>
                    </div>
                    <div class="col">
                        <a href="{{route('listadoProductos')}}" class="btn btn-success" >«</a>
                    </div>  
                </div> 
            </div>         
        </div>
        <div  class="col-md-4">
        </div>
    </div>
</div>
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
    <div class="modal-dialog modal-dialog-centered" role="document">    
        <div style="background-color: Yellow !important;" class="modal-content">      
            <div > 
                </br> 
                <h5  style="color: Blue !important" id="exampleModalLongTitle" align="center">¡Cuidado!</h5>        
                                                      
            </div>      
            <div align="center" style="color: Blue !important"> 
                </br>
                ¿Está seguro de eliminar el producto {{$productos->nombreProducto}} del catálogo?
            </div>      
            <div  > 
                </br>
                <a href='{{url("productos/eliminar/$productos->id")}}' class="boton_5" style="color: Blue !important">Si</a>
                <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                    <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                </button> 
                    </br> </br> 
            </div>    
        </div>  
        
    </div> 
</div>


</div>
        </div>
       
    </div>
</div>
@stop