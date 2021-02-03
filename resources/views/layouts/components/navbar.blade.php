<header class="nav-dark-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav mr-5">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('home')}}">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('trayectoria')}}">TRAYECTORIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('servicios')}}">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('empresarios')}}" >EMPRESARIO UP</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('comunidad')}}" >COMUNIDAD UNIVERSAL</a>
          </li>
          
        </ul>
        <ul class="navbar-nav justify-content-end ">
          <li class="nav-item ">
              <a class="nav-link" href="{{route('mi-oficina')}}" >MI OFICINA <i class="ml-1 fas fa-ellipsis-v"></i></a>
          </li>
        </ul>
        
      </div>
    </nav>    
  </div>
</header>


