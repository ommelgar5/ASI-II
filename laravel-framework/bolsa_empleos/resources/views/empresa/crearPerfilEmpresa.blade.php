@extends('layouts.registroAplicanteTemplate')

@section('titulo','Registrar se como empresa')

@section('contenido')
<form id="perfilEmpresa" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card p-3">
    <h4 class="text-center mb-3">Información Empresa</h4>
    
    <div class="form-group">
      <label for="correo">Correo: <strong class="text-danger">*</strong></label>
      <input type="email"  class="form-control" name="email" id="correo" placeholder="correo@gmail.com">
    </div>

    <div class="form-group">
      <label for="correo">Contraseña: <strong class="text-danger">*</strong></label>
      <input class="form-control" type="password" name="password" required minlength="6" maxlength="12">
    </div>
    <div class="form-group">
      <label for="correo">Repetir contraseña: <strong class="text-danger">*</strong></label>
      <input class="form-control" type="password" required minlength="6" maxlength="12">
    </div>

    <div class="form-group">
      <label for="nombreJuridico">Nombre juridico: <strong class="text-danger">*</strong></label>
      <input type="text"  class="form-control" id="juridico" name="juridico" maxlength="200">
    </div>

    <div class="form-group">
      <label for="nombreComercial">Nombre comercial: <strong class="text-danger">*</strong></label>
      <input type="text"  class="form-control" id="comercial" name="comercial" maxlength="200">
    </div>

    <div class="form-group">
      <label for="nit">NIT:  <strong class="text-danger">*</strong></label>
      <input type="text"  class="form-control" id="nit" name="nit" placeholder="1111-111111-112-8" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]" minlength="17" maxlength="17">
    </div>

    <div class="form-group">
      <label for="giroEmpresa">Giro Empresa: <strong class="text-danger">*</strong></label>
      <select class="form-control" id="giroEmpresa" name="giro">
        <option value="0">Seleccione el giro</option>
        @foreach($data['giros_empresa'] as $giro_empresa)
            <option value="{{ $giro_empresa->cod_giro }}">{{ $giro_empresa->giro }}</option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
          <label for="referencia">Descripción:</label>
          <textarea class="form-control" rows="5" id="descripcion" name="descripcion" maxlength="1000"></textarea>
      </div>

    <div class="form-group">
      <label for="tel1">Telefono 1 <strong class="text-danger">*</strong></label>
      <input type="text"  class="form-control" name="telefono1" id="tel1" minlength="8" maxlength="8">
    </div>

    <div class="form-group">
      <label for="tel2">Telefono 2</label>
      <input type="text"  class="form-control" name="telefono2" id="tel2" minlength="8" maxlength="8">
    </div>

    <div class="form-group">
      <label for="direccion">Dirección: <strong class="text-danger">*</strong></label>
      <input type="text"  class="form-control" name="direccion" id="direccion" maxlength="300" required>
    </div>


    <div class="form-group">
      <label for="referencia">Referencia:</label>
      <textarea class="form-control" rows="5" id="referencia" name="referencia" maxlength="200"></textarea>
    </div>

    <div class="form-group">
      <label for="departamento">Departamento:  <strong class="text-danger">*</strong></label>
      <select class="form-control" id="departamento" name="departamento">
        <option value="0">Seleccione un departamento</option>
        @foreach($data['departamentos'] as $departamento)
          <option value="{{ $departamento->cod_departamento }}">{{ $departamento->departamento }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="mun">Municipio:  <strong class="text-danger">*</strong></label>
      <select class="form-control" id="municipio" name="municipio">
        <option value="0">Seleccione un municipio</option>
        @foreach($data['municipios'] as $municipio)
          <option value="{{ $municipio->cod_municipio }}">{{ $municipio->municipio }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="mun">Imagen de la cuenta:</label>
      <input type="file" class="form-control-file" id="logo" accept="image/*" name="logo">
    </div>
  </div>
  
  <div class="text-center">
    <button class="btn btn-primary mt-2" >Guardar</button>
  </div>
</form>
@endsection

@section('jsExtra')
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
      event.preventDefault()
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
//                   toastr.error(response.errorMessage);
//                   $out = false;
                  console.log(response);
              }else{
                  window.location.replace("{{ url('/') }}");
//                  console.log(response);
              }
          },
          error: function(){
              $out = false;
          }
      });
    });
  });
</script>
@endsection
  