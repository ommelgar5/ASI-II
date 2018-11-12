
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
        <div class="container-header"><a class="container-header__link" href="index.html"><img class="container-header__logo" src="assets/img/logo-blanco.png"></a>
          <div class="container-header__user"><a class="container-header__salir" href="/empresa.html">Inicio</a></div>
        </div>
      </div>
    </header>
    <nav>
    </nav>
    <main class="main l-container">
      <div class="container-agregarOferta l-container">
        <h1 class="container-agregarOferta__title--detalle">Agregar Oferta</h1>
        <div class="container-agregarOferta__oferta">
          <form class="container-agregarOferta__form" action="/usuario.html" method="post">
            <div class="container-agregarOferta__detalle">
              <h2 class="container-agregarOferta__title">Detalle de la oferta</h2>
              <label class="container-agregarOferta__label">Cargo</label>
              <select class="container-agregarOferta__combo" id="r_cargo" name="r_cargo">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Analista | Programador</option>
                <option class="container-agregarOferta__opcion" value="3">Administrador de Base de Datos</option>
                <option class="container-agregarOferta__opcion" value="4">Analista de Sistemas</option>
                <option class="container-agregarOferta__opcion" value="5">Jefe de Ventas</option>
                <option class="container-agregarOferta__opcion" value="6">Vendedor</option>
              </select>
              <label class="container-agregarOferta__label">Titulo</label>
              <input class="container-agregarOferta__input" type="text" required>
              <label class="container-agregarOferta__label">Descripción</label>
              <textarea class="container-agregarOferta__textarea"></textarea>
              <label class="container-agregarOferta__label">Años de experiencia laboral</label>
              <select class="container-agregarOferta__combo" id="r_experiencia" name="r_experiencia">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Sin experiencia</option>
                <option class="container-agregarOferta__opcion" value="3">menos de un año</option>
                <option class="container-agregarOferta__opcion" value="4">de uno a tres años</option>
                <option class="container-agregarOferta__opcion" value="5">de tres a cinco años</option>
                <option class="container-agregarOferta__opcion" value="6">mas de 5 años</option>
              </select>
              <label class="container-agregarOferta__label">Tipo de contrato</label>
              <select class="container-agregarOferta__combo" id="t_contrato" name="t_contrato">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Tiempo indefinido</option>
                <option class="container-agregarOferta__opcion" value="2">Período determinado</option>
                <option class="container-agregarOferta__opcion" value="2">Servicio profesional</option>
                <option class="container-agregarOferta__opcion" value="2">Período de prueba</option>
                <option class="container-agregarOferta__opcion" value="2">Interinato</option>
              </select>
              <label class="container-agregarOferta__label">Número de plazas</label>
              <input class="container-agregarOferta__input" type="number" min="1" max="50" value="1" required>
              <label class="container-agregarOferta__label">Edad minima</label>
              <input class="container-agregarOferta__input" type="number" min="15" max="75" required>
              <label class="container-agregarOferta__label">Edad máxima</label>
              <input class="container-agregarOferta__input" type="number" min="15" max="75" required>
              <label class="container-agregarOferta__label">Salario minimo</label>
              <input class="container-agregarOferta__input" type="number" min="1" required>
              <label class="container-agregarOferta__label">Salario maximo</label>
              <input class="container-agregarOferta__input" type="number" min="1" required>
              <label class="container-agregarOferta__label">Género</label>
              <select class="container-agregarOferta__combo" id="genero" name="genero">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Femenino</option>
                <option class="container-agregarOferta__opcion" value="2">Masculino</option>
              </select>
              <label class="container-agregarOferta__label">Departamento</label>
              <select class="container-agregarOferta__combo" id="departamento" name="departamento">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">La Libertad</option>
              </select>
              <label class="container-agregarOferta__label">Municipio</label>
              <select class="container-agregarOferta__combo" id="municipio" name="municipio">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Santa Tecla</option>
                <option class="container-agregarOferta__opcion" value="2">Antiguo Cuscatlán</option>
                <option class="container-agregarOferta__opcion" value="3">Ciudad Arce</option>
                <option class="container-agregarOferta__opcion" value="4">Colón</option>
              </select>
              <label class="container-agregarOferta__label">Vehículo</label>
              <input class="container-agregarOferta__radiob" type="radio" name="radio">
              <label class="container-agregarOferta__label--radio">Si</label>
              <input class="container-agregarOferta__radiob" type="radio" name="radio">
              <label class="container-agregarOferta__label--radio">No</label>
              <label class="container-agregarOferta__label">Tipo de licencia</label>
              <select class="container-agregarOferta__combo" id="tipoLicencia" name="tipoLicencia">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Ninguna</option>
                <option class="container-agregarOferta__opcion" value="3">Juvenil Motociclistas</option>
                <option class="container-agregarOferta__opcion" value="4">Motociclistas</option>
                <option class="container-agregarOferta__opcion" value="5">Particular</option>
                <option class="container-agregarOferta__opcion" value="5">Liviana</option>
                <option class="container-agregarOferta__opcion" value="5">Pesada</option>
                <option class="container-agregarOferta__opcion" value="5">Pesada-T</option>
              </select>
            </div>
            <h2 class="container-agregarOferta__title--requisitos">Requisitos requeridos</h2>
            <div class="container-agregarOferta__estudios">
              <h2 class="container-agregarOferta__title">Estudios</h2>
              <label class="container-agregarOferta__label">Carrera</label>
              <input class="container-agregarOferta__input" type="text">
              <label class="container-agregarOferta__label">Nivel de estudio</label>
              <select class="container-agregarOferta__combo" id="nivelEstudio" name="nivelEstudio">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Estudiante Universitario (5to Año)</option>
                <option class="container-agregarOferta__opcion" value="1">Estudiante Universitario (4to Año)</option>
                <option class="container-agregarOferta__opcion" value="1">Estudiante Universitario (3er Año)</option>
                <option class="container-agregarOferta__opcion" value="1">Estudiante Universitario (3er Año)</option>
                <option class="container-agregarOferta__opcion" value="1">Estudiante Universitario (2do Año)</option>
              </select>
              <div class="container-agregarOferta__botones"><a class="container-agregarOferta__link boton secundario" href="#">Guardar</a><a class="container-agregarOferta__link boton secundario" href="#">Cancelar</a></div>
            </div>
            <div class="container-agregarOferta__tecnologias">
              <h2 class="container-agregarOferta__title">Programas</h2>
              <label class="container-agregarOferta__label">Tipo de Tecnologia</label>
              <select class="container-agregarOferta__combo" id="teccnologia" name="teccnologia">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Sistemas Operativos</option>
                <option class="container-agregarOferta__opcion" value="2">Lenguajes de programación</option>
                <option class="container-agregarOferta__opcion" value="3">Programas de diseño</option>
                <option class="container-agregarOferta__opcion" value="4">Programas de oficina</option>
                <option class="container-agregarOferta__opcion" value="5">Base de datos</option>
              </select>
              <label class="container-agregarOferta__label">Programa</label>
              <select class="container-agregarOferta__combo" id="programa" name="programa">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Microsoft Windows</option>
                <option class="container-agregarOferta__opcion" value="2">Linux</option>
                <option class="container-agregarOferta__opcion" value="3">Microsoft Word</option>
                <option class="container-agregarOferta__opcion" value="3">Microsoft Exel</option>
                <option class="container-agregarOferta__opcion" value="3">Adobe photoshop</option>
              </select>
              <label class="container-agregarOferta__label">Nivel</label>
              <select class="container-agregarOferta__combo" id="nivel" name="tnivel">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Básico</option>
                <option class="container-agregarOferta__opcion" value="2">Intermedio</option>
                <option class="container-agregarOferta__opcion" value="3">Avanzado</option>
              </select>
              <div class="container-agregarOferta__botones"><a class="container-agregarOferta__link boton secundario" href="#">Guardar</a><a class="container-agregarOferta__link boton secundario" href="#">Cancelar</a></div>
            </div>
            <div class="container-agregarOferta__idioma">
              <h2 class="container-agregarOferta__title">Idiomas</h2>
              <label class="container-agregarOferta__label">Idioma</label>
              <select class="container-agregarOferta__combo" id="idioma" name="idioma">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Inglés</option>
                <option class="container-agregarOferta__opcion" value="2">Frances</option>
                <option class="container-agregarOferta__opcion" value="3">Aleman</option>
                <option class="container-agregarOferta__opcion" value="4">Chino mandarín</option>
                <option class="container-agregarOferta__opcion" value="5">Italiano</option>
                <option class="container-agregarOferta__opcion" value="5">Portugues</option>
              </select>
              <label class="container-agregarOferta__label">Nivel</label>
              <select class="container-agregarOferta__combo" id="nivelI" name="nivelI">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Básico</option>
                <option class="container-agregarOferta__opcion" value="2">Intermedio</option>
                <option class="container-agregarOferta__opcion" value="3">Avanzado</option>
              </select>
              <div class="container-agregarOferta__botones"><a class="container-agregarOferta__link boton secundario" href="#">Guardar</a><a class="container-agregarOferta__link boton secundario" href="#">Cancelar</a></div>
            </div>
            <div class="container-agregarOferta__experiencia">
              <h2 class="container-agregarOferta__title">Experiencia requerida</h2>
              <label class="container-agregarOferta__label">Idioma</label>
              <select class="container-agregarOferta__combo" id="cargo" name="cargo">
                <option class="container-agregarOferta__opcion" value="0">Seleccione...</option>
                <option class="container-agregarOferta__opcion" value="1">Vendedor</option>
                <option class="container-agregarOferta__opcion" value="2">Soport Técnico en Redes</option>
                <option class="container-agregarOferta__opcion" value="3">Analista | Programador</option>
                <option class="container-agregarOferta__opcion" value="4">Asistente de Mercadeo</option>
                <option class="container-agregarOferta__opcion" value="5">Jefe de Ventas</option>
              </select>
              <div class="container-agregarOferta__botones"><a class="container-agregarOferta__link boton secundario" href="#">Guardar</a><a class="container-agregarOferta__link boton secundario" href="#">Cancelar</a></div>
            </div>
            <input class="container-agregarOferta__submit boton primario" type="submit" value="Guardar">
          </form>
        </div>
      </div>
    </main>
    <aside>
    </aside>
    <section>
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