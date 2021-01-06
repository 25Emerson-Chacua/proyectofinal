<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>&#x2655; Granero superior</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/css/bootstrap/bootstrap.min.css') }}"/>
        <script src="{{ url('/assets/nuestrosestilos/js/demo-rtl.js') }}"></script>

 
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/css/libs/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/css/libs/nanoscroller.css') }}"/>
    <link href="{{ url('/assets/bootstrap/css/myStyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/css/libs/daterangepicker.css') }}" />
    <link type="image/x-icon" href="logo.ico" rel="shortcut icon"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>


<!-- DATATABLES 
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/datatables/jquery.dataTables.min.css') }}">    
  <link href="{{ url('/assets/nuestrosestilos/datatables/buttons.dataTables.min.css') }}" rel="stylesheet"/>
  <link href="{{ url('/assets/nuestrosestilos/datatables/responsive.dataTables.min.css') }}" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/nuestrosestilos/css/bootstrap-select.min.css') }}">
-->



    </head>
    
    <body>
            @include('partials.navegacion')

            <div >
                @yield('content')
            </div>


            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/popper.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/mdb.min.js') }}"></script> 
    
            <script type="text/javascript" src="{{ url('/assets/nuestrosestilos/js/demo-rtl.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/nuestrosestilos/js/scripts.js') }}"></script>




            
    </body>
    </div></div> </div></div></div>
    <footer class="page-footer " style="background-color: #34495e;"  >
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">
                    </h5>
            </div>
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase">
                    Granero Superior</h5>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5>Contactanos</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Líneas de atención al cliente</a>
                        <br><a href="#!">01 8000 183475</a>
                    </li>
                    <li>
                        <a href="#!">WhatsApp: 310 389 56 09</a>
                    </li>
                    <li>
                   
                        <a href="#!">Elaborado por: </a><br>
                        <a href="#!">SEBASTIÁN DAVID CHAVES GARRETA</a>
                        <a href="#!">WILINTON ANDRES MEJIA CHAMORRO</a>
                        <a href="#!">EMERSON ALEXANDER CHACUA PÍSTALA</a>
                        
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Granero Superior</a>
    </div>
    <!-- Copyright -->

</footer>
</div>
<!-- Fin content wrapper-->

</div>
</div>

</html>