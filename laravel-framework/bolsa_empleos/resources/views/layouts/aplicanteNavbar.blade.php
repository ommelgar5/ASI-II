<!--Barra de navegacion principal -->

@if (Auth::check())
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="/">
      <img src="/assets/img/logos_st/logo.png" alt="logo.png" width="120">
    </a>
    <div href="#" class="dropdown mr-2">
      <span class="text-muted small">
        {{ App\persona::where('dui', Auth::user()->dui)->first()->nombre }} {{ App\persona::where('dui', Auth::user()->dui)->first()->apellido  }}
      </span>
      <a href="#"></a>
      <img src="/assets/img/users/user.png" alt="user.png" width="50" class="rounded-circle dropdown-toggle" data-toggle="dropdown" style="border: 1px solid steelblue">
      <div class="dropdown-menu ">
        <a class="dropdown-item" href="/perfil"><i class="fas fa-user-tie fa-sm mr-1"></i> Perfil</a>
        <a class="dropdown-item" href="/editPerfil"><i class="fas fa-pencil-alt fa-sm mr-1"></i> Editar Perfil</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-1"></i>Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="/assets/img/logos_st/logo.png" alt="logo.png" width="120">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('registroEmpresa') }}"><i class="fas fa-building fa-lg mr-1"></i>Registrate empresa</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="{{ route('empresa.login') }}" ><i class="fas fa-briefcase fa-lg mr-1"></i></i>Ingresar empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('registro') }}" ><i class="fas fa-address-book fa-lg mr-1"></i>Registrate usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#showModal" ><i class="fas fa-user-tie fa-lg mr-1"></i>Ingresar usuario</a>
        </li>
    </ul>
    <a  class="btn btn-outline-success my-2 my-sm-0 mr-4" href="{{ route('contactanos') }}">Contacto</a>
  </div>
</nav>
@endif