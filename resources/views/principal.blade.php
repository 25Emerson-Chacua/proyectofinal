
@extends('layout.master')
    @section('content')

        <div class="container" align="center">
            

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                
                    <div class="carousel-item active">
                    <img src="{{url('imagenes/slide1.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                    <h1 style="color: white"> ¡BIENVENIDOS AL SUPERMERCADO! </h1>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                        <h1> &#x2655;</h1>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('imagenes/slide2.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 style="color: white"> ¡BIENVENIDOS AL SUPERMERCADO! </h1>
                      <br><br><br><br><br><br><br><br><br><br><br><br>
                          <h1> &#x2655;</h1>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('imagenes/slide3.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 style="color: white"> ¡BIENVENIDOS AL SUPERMERCADO! </h1>
                      <br><br><br><br><br><br><br><br><br><br><br><br>
                          <h1> &#x2655;</h1>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('imagenes/slide4.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 style="color: white"> ¡BIENVENIDOS AL SUPERMERCADO! </h1>
                      <br><br><br><br><br><br><br><br><br><br><br><br>
                          <h1> &#x2655;</h1>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br><br>
            <img src="{{url('imagenes/corona.png')}}" height="100">

            <br><br>
        </div>
    @stop