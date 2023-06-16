<!-- SideBar tamanho de janela media a xxl -->
<div class="container d-none d-md-block col-xxl-3 col-md-4 ms-0">
    <div class=" d-flex flex-column  position-fixed flex-shrink-0 align-items-stretch text-white bg-dark p-3 m-0" style="width: 20%; height:100%">
        <a href="/" class="d-flex align-items-start mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">LabOrganizer</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('home')}}"  class="nav-link text-white" aria-current="page">
            Página Inicial
            </a>
        </li>
        <li>
            <a href="{{route('projetos')}}" class="nav-link text-white">
            Meus projetos
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            Estoque
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            Resultados
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            
            Agenda de equipamentos
            </a>
        </li>
        </ul>
        <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
               
                <li><a class="dropdown-item" href="#">Editar senha</a></li>
                <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
            </div>
    </div>
</div>

<!-- SideBar tamanho de janela mobile a sm (pequena) -->

<div class="container d-block col-2 col-sm-3 d-md-none d-xxl-none text-center">
<div class=" d-flex flex-column flex-shrink-0 bg-dark position-fixed pt-3" style="width: 15%; height:100%">

    <ul class="nav nav-pills nav-flush flex-column ">
    <li class="nav-item">
    <a href="/" class="d-block link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
      <img src="{{asset('img/logomobile.png')}}" width="40" height="45">
      <span class="visually-hidden">Icon-only</span>
    </a>
    </li>

      <li class="nav-item">
        <a href="{{route('home')}}" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="bi bi-house-door"></i>
        </a>
      </li>
      <li>
        <a href="{{route('projetos')}}" class="nav-link py-3 border-bottom" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="bi bi-folder"></i>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"/></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg class="bi" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"/></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"/></svg>
        </a>
      </li>
    </ul>
    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>
