@extends('layout.master')
@section('content')
@if(count($categorias)===0)
    </br></br></br></br></br>
    <div class="container"align="center"> 
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 68rem;">
                    <div class="card-body">
                        <h1 class="card-title" style="color: black"> Primero debe registrar una categoría </h1>
                    </div>
                    <div >
                        <a class="btn btn-success" href='{{url()->previous()}}'> Regresar </a>
                    </div></br></br>
                </div>
            </div>
        </div>
    </div>
    </br></br></br></br></br></br></br></br></br></br>
@else
<div class="container"align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 109rem;">


                
                <form class="text-center border border-light p-5" action='{{url("productos/registro")}}' enctype="multipart/form-data" method= "POST">
                    @csrf
                    <p class="h4 mb-4">Registro de producto</p>
                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="nombrePro" name="nombrePro"  class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                <label for="nombrePro">Nombre </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                <input type="number" id='cantidadPro' name='cantidadPro' min='1' max='1000' class="form-control" placeholder="" required>
                                <label for="cantidadPro">Cantidad </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        
                        <div class="col">
                            <div class="md-form">
                                <input type="number" id='precioPro' name='precioPro' min='100'  class="form-control" placeholder="" required>
                                <label for="precioPro">Precio </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="md-form">
                                <strong>Imagen:</strong></br>
                                <input type="file" name="urlfoto" required>
                            </div>
                        </div>
                    </div>
            

                    <label for="productos">Seleccione tipo</label> 
                    <select class="custom-select-sm" id="productos" name="categorias" >
                        @foreach($categorias as $c)
                            <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
                        @endforeach
                    </select>
                    </br></br</br></br>
                    
                    
                    <button type="submit" class="boton_personalizado">Registrar</button>
                    <button type="reset" class="boton_personalizado">Limpiar</button><br>
                    <a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>
                </form>
                </br>


            </div>
        </div>
    </div>
</div>
@endif
@stop