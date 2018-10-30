<!-- Agrega las categorias-->
<!-- Agrega las categorias-->
<!-- Agrgar una oferta-->
<!-- Que se va a mostar en la opción gestión en Empresa-->
<!-- Ruta a las imagenes--><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>inicio</title>
    <meta name="description" content="Bolsa de trabajo de la Alcaldia de Santa Tecla">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>
  <body>
    <header>
      <div class="main-header l-container">
        <div class="container-header"><a class="container-header__link" href="{{ url('/') }}"><img class="container-header__logo" src="assets/img/logo-blanco.png"></a>
          <h1 class="container-header__title">Bolsa de trabajo</h1>

            @if (Route::has('login'))
                <!-- <div class="top-right links"> -->
                    @auth
                        <a href="{{ url('/') }}">Inicio</a>
                    @else
                        <a class="container-header__validar" href="#" id="ingresar">Ingresar</a> 
                        <a class="container-header__validar" href="{{ url('registro') }}" >Registarte</a> 
                    @endauth
                <!-- </div> -->
            @endif
          
            <i class="fas fa-align-justify container-header__icon" id="submenuHeader"></i>
        </div>
      </div>
      <div class="main-header">
        <div class="container-login" id="containerLogin">
          <div class="container-login__modal" id="containerLoginModal"><span class="container-login__close" id="closeLogin">X</span><img class="container-login__img" src="assets/img/logo.png" alt="login-img">
            <form class="container-login__form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="container-login__dato"><i class="fas fa-user-shield container-login__icon"></i>
                <input class="container-login__input"  name="dui" type="text">
              </div>
              <div class="container-login__dato"><i class="fas fa-key container-login__icon"></i>
                <input class="container-login__input" type="password" name="password">
              </div>
              <input type="submit" value="Ingresar" class="container-login__submit" style="display:block; text-align: center;" />

              <!-- <a class="container-login__submit" href="/usuario.html" style="display:block; text-align: center;">Ingresar</a> -->
              <div class="container-login__ref"><a class="container-login__link" href="restablecer.html">¿Has olvidado la contraseña?</a><a class="container-login__link" href="index.html">Inicio</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="container-opciones" id="containerOpciones">
        <div class="container-menu"><span class="container-menu__close" id="closeSubmenu">X</span>
          <ul class="menu" id="submenu">
            <li class="menu__item"><a class="menu__link" href="/index.html">Inicio</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Todas las ofertas</a></li>
            <li class="menu__item"> <a class="menu__link categorias" href="#" id="categorias">Categorias</a>
              <ul class="submenu">
                <li class="submenu__item"><a class="submenu__link" href="#">area</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Informática | Internet</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Mercadeo | Ventas</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Finanzas | Contabilidad | aditoria</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Banca | Servicios | Financi</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Salud </a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Recursos Humanos</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Operaciones | Logística</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Publicidad | Comunicacion</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Almacenamie</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Compra</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Puestos Profesionales</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Call Center</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Apoyo de Oficina</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Mantenimiento</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Administración</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Producción | Ingeniería | Calidad </a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Restaurantes </a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Cualquier Área</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Varios</a></li>
                <li class="submenu__item"><a class="submenu__link" href="#">Telecomunicaciones</a></li>
              </ul>
            </li>
            <li class="menu__item"><a class="menu__link" href="#">Registarse</a></li>
            <li class="menu__item"><a class="menu__link" href="#" id="ingresarSubmenu">Ingresar</a></li>
          </ul>
        </div>
      </div>
    </header>
    <nav>
      <!-- main-menu-->
      <div class="main-menu l-container"><a class="main-menu__link" href="#">Todos</a>
        <form class="main-menu__form" action="#" method="get">
          <label class="main-menu__label">Búsqueda</label>
          <input class="main-menu__input" type="text">
          <input class="main-menu__submit" type="submit" value=""><i class="fas fa-search"></i>
        </form>
      </div>
    </nav>
    <main class="main l-container">
      <div class="container-categoria">
        <h2 class="container-categoria__title">Categorias</h2>
        <ul class="container-categoria__menu">
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">area</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Informática | Internet</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Mercadeo | Ventas</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Finanzas | Contabilidad | aditoria</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Banca | Servicios | Financi</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Salud </a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Recursos Humanos</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Operaciones | Logística</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Publicidad | Comunicacion</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Almacenamie</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Compra</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Puestos Profesionales</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Call Center</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Apoyo de Oficina</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Mantenimiento</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Administración</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Producción | Ingeniería | Calidad </a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Restaurantes </a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Cualquier Área</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Varios</a></li>
          <li class="container-categoria__item"><a class="container-categoria__link" href="#">Telecomunicaciones</a></li>
        </ul>
      </div>
      <div class="container-oferta"><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a><a class="container-oferta__oferta" href="oferta.html">
          <div class="container-oferta__cont"><img class="container-oferta__logo" src="assets/img/logos/claro.png"/></div>
          <h3 class="container-oferta__title">Ejecutivo de Ventas</h3>
          <p class="container-oferta__description">Ejecutivo de venta para nuestros productos como: servicios de telefonia móvil y fija, internet y cable.Con pasión por las ventas, excelente presentación. Ejecutivo de ventas vend sabe que el mundo de las ventas están afuera, tener claro que ventas es prospección perseverancia para obtener el mejor éxito.</p>
          <p class="container-oferta__depto">La Libertad</p>
          <div class="container-oferta__date">15/05/2018</div></a>
        <div class="container-pagina">
          <div class="container-pagina__item"><a class="container-pagina__link" href="#"><</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">1</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">2</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">3</a></div>
          <div class="pagina"><a class="container-pagina__link" href="#">4</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">5</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">8</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">7</a></div>
          <div class="container-pagina__item"><a class="container-pagina__link" href="#">></a></div>
        </div>
      </div>
    </main>
    <aside>
    </aside>
    <section>
      <div class="main-logo l-container">
        <div class="container-logo"><img class="container-logo__img" src="assets/img/logos/banco_azul.jpg" alt="logo"><img class="container-logo__img" src="assets/img/logos/claro.png" alt="logo"><img class="container-logo__img" src="assets/img/logos/davivienda.jpg" alt="logo"><img class="container-logo__img" src="assets/img/logos/pollo_campero.jpg" alt="logo"><img class="container-logo__img" src="assets/img/logos/tigo.png" alt="logo"><img class="container-logo__img" src="assets/img/logos/unicomer.jpg" alt="logo"></div>
      </div>
    </section>
    <footer>
      <div class="main-footer">
        <div class="container-footer l-container">
          <div class="container-footer__logos"><img class="container-footer__img" src="assets/img/logo.png"><img class="container-footer__img" src="assets/img/escudo.png"></div>
          <p class="container-footer__address">© 2016 - Alcaldía Municipal de Santa Tecla / 2a Av. Norte y 1a Calle Poniente No. 2-3, Santa Tecla, El Salvador</p>
          <div class="container-footer__sociales"><a class="container-footer__social" href="http://mail.amst.gob.sv/webmail/" title="correo"><i class="fas fa-envelope-square"></i></a><a class="container-footer__social" href="https://facebook.com/SantaTeclaSV" title="facebook"><i class="fab fa-facebook-square"></i></a><a class="container-footer__social" href="https://twitter.com/SantaTeclaSV" title="twitter"><i class="fab fa-twitter-square"></i></a><a class="container-footer__social" href="https://instagram.com/santateclasv/" title="instagram"><i class="fab fa-instagram"></i></a></div>
        </div>
      </div>
    </footer>
    <script src="assets/js/script.js"></script>
  </body>
</html>