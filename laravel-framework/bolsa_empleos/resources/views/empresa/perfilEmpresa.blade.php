
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
      <div class="container-perfilEmpresa l-container">
        <h1 class="container-perfilEmpresa__title"> Perfil de la empresa</h1>
        <div class="container-perfilEmpresa__empresa">
          <form id="perfilEmpresa" class="container-perfilEmpresa__form" method="post" enctype="multipart/form-data">
            <div class="container-perfilEmpresa__info">
              <h2 class="container-perfilEmpresa__title">Información empresa</h2>
              <label class="container-perfilEmpresa__label">Nombre juridico</label>
              <input class="container-perfilEmpresa__input" type="text" name="juridico" required>
              <label class="container-perfilEmpresa__label">Nombre comercial</label>
              <input class="container-perfilEmpresa__input" type="text" name="comercial" required>
              <label class="container-perfilEmpresa__label">NIT</label>
              <input class="container-perfilEmpresa__input" type="text" name="nit" required>
              <label class="container-perfilEmpresa__label">Giro de la empresa</label>
              <select class="container-perfilEmpresa__combo" id="giro" name="giro">
                <option class="container-perfilEmpresa__opcion" value="">Seleccione el giro</option>
                @foreach($data['giros_empresa'] as $giro_empresa)
                    <option value="{{ $giro_empresa->cod_giro }}">{{ $giro_empresa->giro }}</option>
                @endforeach
              </select>
              <label class="container-perfilEmpresa__label">Correo</label>
              <input class="container-perfilEmpresa__input" type="email" name="email" placeholder="correo@gmail.com" required>
              <label class="container-perfilEmpresa__label">Contraseña</label>
              <input class="container-perfilEmpresa__input" type="password" name="password" required>
              <label class="container-perfilEmpresa__label">Repetir contraseña</label>
              <input class="container-perfilEmpresa__input" type="password" required>
              <label class="container-perfilEmpresa__label">Telefono 1</label>
              <input class="container-perfilEmpresa__input" type="tel" name="telefono1" required>
              <label class="container-perfilEmpresa__label">Telefono 2</label>
              <input class="container-perfilEmpresa__input" type="tel" name="telefono2">
              <label class="container-perfilEmpresa__label">Dirección</label>
              <textarea class="container-perfilEmpresa__textarea" name="direccion"></textarea>
              <label class="container-perfilEmpresa__label">Referencia</label>
              <textarea class="container-perfilEmpresa__textarea" name="referencia"></textarea>
              <label class="container-perfilEmpresa__label">Departamento</label>
              <select class="container-perfilEmpresa__combo" id="departamento" name="departamento">
                <option class="container-perfilEmpresa__opcion" value="">Seleccione un departamento</option>
                @foreach($data['departamentos'] as $departamento)
                  <option value="{{ $departamento->cod_departamento }}">{{ $departamento->departamento }}</option>
                @endforeach
              </select>
              <label class="container-perfilEmpresa__label">Municipio</label>
              <select class="container-perfilEmpresa__combo" id="municipio" name="municipio">
                <option class="container-perfilEmpresa__opcion" value="">Seleccione un municipio</option>
                @foreach($data['municipios'] as $municipio)
                  <option value="{{ $municipio->cod_municipio }}">{{ $municipio->municipio }}</option>
                @endforeach
              </select>
              <label class="container-perfil__label">Imagen de la cuenta</label>
              <input class="container-perfil__input" type="file" accept="image/*" name="logo">
            </div>
            <input class="container-perfilEmpresa__submit boton primario" type="submit" value="Guardar">
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
    <script src="css/login_register/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        //Actualiza los municipios cuando se selecciona un departamento
        $(document).on("change","#departamento",function(event){
            var departamento = $(this).val();
            $.ajax({
                method: "get",
                url: "{{ url('/obtenerMunicipios') }}/"+departamento,
            }).done(function( msg ) {
                $("#municipio").html('<option value="0">Seleccione un municipio</option>');
                $(msg).each(function(k,v){
                    var html = '<option value="'+v.cod_municipio+'">'+v.municipio+'</option>' ;
                    $(html).appendTo("#municipio");
                })
            });
        });

        $('#perfilEmpresa').submit(function(event){
          event.preventDefault();
          debugger;
          // var myForm = $(this);
          var myForm = document.getElementById('perfilEmpresa');
          formData = new FormData(myForm);
          $.ajax({
              method: 'POST',
              type: 'POST',
              url: "{{ url('/registroEmpresa') }}",
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: formData,
              success:function(response){
                  if(response.error){
                      // toastr.error(response.errorMessage);
                      // $out = false;
                  }else{
                      window.location.replace("{{ url('/') }}");
                  }
              },
              error: function(){
                  $out = false;
              }
          });
        });
      });
    </script>
  </body>
</html>