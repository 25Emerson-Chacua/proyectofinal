<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark special-color-dark">
  <a class="navbar-brand" href="{{url('/')}}">
  
  
  Hotel la Rivera</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">

      
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          
          Hotel
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Misión y Visión</a>
          <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicación</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Servicios
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
          <a class="dropdown-item" href="{{url('/servicios/eventos/o')}}">Eventos</a>
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/reservas')}}">Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contactanos')}}">Contactos</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->