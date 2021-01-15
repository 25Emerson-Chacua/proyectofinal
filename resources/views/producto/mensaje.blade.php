@extends('layout.master')
@section('content')
</br></br></br></br></br>


    <div class="container"align="center"> 
    <div class="row">
       
        <div class="col-md-4">
            <div class="card" style="width: 68rem;">
                <div class="card-body">
                    <h1 class="card-title" style="color: black"> El producto con ese número no existe </h1>
                </div>
                <div >
                    <a class="btn btn-success" href="{{route('listadoProductos')}}"> Regresar </a>
                </div></br></br>
            </div>
        </div>
       
    </div>
</div>
    </br></br></br></br></br></br></br></br></br></br>

@stop 