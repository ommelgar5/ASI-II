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
  <body class="vertical-layout" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

    
    @include('layouts.aplicanteNavbar')
    
    @include('layouts.aplicanteLoginModal')
    
    <main class="container my-3">
      
      <div class="row">
        
        <div class="col-lg-12">
          
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