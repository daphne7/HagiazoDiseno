 <!-- Heading -->
        <h6 class="navbar-heading text-muted">Gestion</h6>

 <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./index.html">
              <i class="ni ni-tv-2 text-danger"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/icons.html">
              <i class="ni ni-briefcase-24 text-blue"></i> Materias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/maps.html">
              <i class="fas fa-stethoscope text-orange"></i> Docentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/profile.html">
              <i class="fas fa-bed text-warning"></i> Estudiantes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout') }}"
            	onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
            >
              <i class="fas fa-sign-in-alt"></i> Cerrar Sesion
            </a>
            <form action="{{route('logout') }}" method="POST" stile="display: none;" id="formLogout">
             @csrf
            </form>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship"></i> Desempeño Docente
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Desempeño Estudiantil
            </a>
          </li>
         
        </ul>
      
