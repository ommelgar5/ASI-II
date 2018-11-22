<!--Barra de navegacion principal -->
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="/">
    <img src="/assets/img/logos_st/logo.png" alt="logo.png" width="120">
  </a>
  <div href="#" class="dropdown mr-2">
    <span class="text-muted small">{{ Auth::guard('empresa')->user()->nombre_comercial }}</span>
    <a href="#"></a>
    <img src="/storage/empresas_logo/{{ Auth::guard('empresa')->user()->logo }}" alt="{{ Auth::guard('empresa')->user()->logo }}" width="50" class="rounded-circle dropdown-toggle" data-toggle="dropdown" style="border: 1px solid steelblue">
    <div class="dropdown-menu ">
      <a class="dropdown-item" href="/editPerfilEmpresa"><i class="fas fa-user-tie fa-sm mr-1"></i> Perfil</a>
      <a class="dropdown-item" href="/editPerfilEmpresa"><i class="fas fa-pencil-alt fa-sm mr-1"></i> Editar Perfil</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-1"></i>Salir</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </div>
  </div>
</nav>