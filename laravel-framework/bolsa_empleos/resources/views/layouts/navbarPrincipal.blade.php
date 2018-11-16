<!--Barra de navegacion principal -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="assets/img/logos_st/logo.png" alt="logo.png" width="120">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="companyRegister.html"><i class="fas fa-building fa-lg mr-1"></i>Registrate empresa</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#showModal" ><i class="fas fa-briefcase fa-lg mr-1"></i></i>Ingresar empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('registro') }}" ><i class="fas fa-address-book fa-lg mr-1"></i>Registrate usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#showModal" ><i class="fas fa-user-tie fa-lg mr-1"></i>Ingresar usuario</a>
        </li>
    </ul>
    <a  class="btn btn-outline-success my-2 my-sm-0 mr-4" href="contacto.html">Contacto</a>
  </div>
</nav>