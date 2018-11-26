<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <meta name="description" content="Bolsa de trabajo de la Alcaldia de Santa Tecla">
    <link rel="shortcut icon" href="/assets/img/icon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome5.5/css/all.min.css">

    @yield('cssExtra')

    <script src="/assets/js/bootstrap4/popper.min.js"></script>
  </head>
  <body>

    
    @include('layouts.aplicanteNavbar')
    
    @include('layouts.aplicanteLoginModal')
    
    <main class="container my-3">
      
      <div class="row">
        <!--Categorias-->
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-tasks fa-fw"></i> Categorias
            </div>
            <div class="panel-body">
              <div class="list-group">
                
                @foreach($categorias_cantidad as $menu)
                <a href="{{ route('ofertas') }}/{{$menu->cod_area}}" class="list-group-item py-1">{{ $menu->area }} 
                  <span class="badge badge-pill badge-primary">{{$menu->cantidad}}</span>
                </a> 
                @endforeach
                
                @foreach($categorias as $menu)
                <a href="{{ route('ofertas') }}/{{$menu->cod_area}}" class="list-group-item py-1">{{ $menu->area }} 
                  <span class="badge badge-pill badge-primary">0</span>
                </a> 
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!--Ofertas-->
        <div class="col-lg-8">
          
          <!--Opciones de ususuario Logueado -->
          <ul class="nav nav-tabs mb-3 mt-3">
            <li class="nav-item">
              <a class="nav-link {{ isActiveRoute('inicio') }}" href="{{ route('inicio') }}"><i class="fas fa-book fa-lg mr-2"></i>Todas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ isActiveRoute('gestion') }}" href="{{ route('gestion') }}"> <i class="fas fa-folder-open fa-lg mr-2"></i> Gestion</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link {{ isActiveRoute('empresa.dashboard') }}" href="#"><i class="fas fa-bookmark fa-lg mr-2"></i>Favoritos</a>
            </li> -->
          </ul>

          @yield('contenido')
        
        </div>
      </div>
      
    </main>
  
    @include('layouts.footer')
  
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap4/bootstrap.min.js"></script>

    @yield('jsExtra')
  
  </body>
</html>