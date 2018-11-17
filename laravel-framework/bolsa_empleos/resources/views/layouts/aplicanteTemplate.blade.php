<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <meta name="description" content="Bolsa de trabajo de la Alcaldia de Santa Tecla">
    <link rel="shortcut icon" href="assets/img/icon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome5.5/css/all.min.css">

    @yield('cssExtra')

    <script src="assets/js/bootstrap4/popper.min.js"></script>
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
                <a href="#" class="list-group-item py-1">Informatica | intenet</a>
                <a href="#" class="list-group-item py-1"> Finanzas | Contabilidad | Aditoria </a>
                <a href="#" class="list-group-item py-1"> Mercadeo | Ventas </a>
                <a href="#" class="list-group-item py-1"> Salud</a>
                <a href="#" class="list-group-item py-1"> Recursos Humanos </a>
                <a href="#" class="list-group-item py-1"> Publicidad | Comunicacion</a>
                <a href="#" class="list-group-item py-1"> Compra </a>
                <a href="#" class="list-group-item py-1"> Call Center</a>
                <a href="#" class="list-group-item py-1"> Producción | Ingeniería | Calidad</a>
                <a href="#" class="list-group-item py-1"> Restaurantes</a>
                <a href="#" class="list-group-item py-1"> Telecomunicaciones </a>
              </div>
            </div>
          </div>
        </div>
        
        <!--Ofertas-->
        <div class="col-lg-8">
          
          @yield('contenido')
        
        </div>
      </div>
      
    </main>
  
    
    <footer class="container-fluid bg-light">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="assets/img/logos_st/escudo.png" alt="">
        </div>
        <div class="col-md-4 text-center text-muted">
          <p>&copy; 2018 - Alcaldía Municipal de Santa Tecla / 2a Av. Norte y 1a Calle Poniente No. 2-3, Santa Tecla, El Salvado</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <a href="https://mail.amst.gob.sv/webmail/login/"><i class="fas fa-envelope fa-2x mr-2 text-success"></i></a>
          <a href="https://www.facebook.com/SantaTeclaSV"><i class="fab fa-facebook-square fa-2x mr-2 text-success"></i> </a>
          <a href="https://twitter.com/SantaTeclaSV"><i class="fab fa-twitter-square fa-2x mr-2 text-success"></i></a>
          <a href="https://www.instagram.com/santateclasv/"><i class="fab fa-instagram fa-2x mr-2 text-success"></i></a>
        </div>
      </div>
    </footer>
  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap4/bootstrap.min.js"></script>

    @yield('jsExtra')
  
  </body>
</html>