@extends('layouts.empresaTemplate')

@section('cssExtra')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
<link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.css">
<!-- END Page Level CSS-->
@endsection

@section('contenido')
<form id="ofertaLaboral" action="{{route('crearOferta')}}" method="post" class="border p-2 rounded mb-3">
  @csrf
  <div class="row">
    
      <div class="col-lg-6">
        <h4>Detalle de la Oferta</h4>
          <div class="form-group">
            <label for="cargo">Titulo:</label>
            <input type="text" name="cargo" id="cargo" class="form-control">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
          </div>
          <div class="form-group">
              <label for="fechaLimite">
                  Fecha de limite :
                  <span class="danger">*</span>
              </label>
              <input type="date" class="form-control required" id="fechaLimite" name="fechaLimite" min="1970-01-01"/>
          </div>
          <div class="form-group">
            <label for="ae">Años de experiencias laboral:</label>
            <select class="form-control" id="ae" name="a_experiencia">
              <option value="">Años de experiencias</option>
              @foreach($data['a_experiencia'] as $a)
                <option value="{{$a->cod_a_experiencia}}">{{$a->a_experiecia}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="tc">Tipo de contrato:</label>
            <select class="form-control" id="tc" name="tipo_contrato">
              <option value="">Tipo de contrato</option>
              @foreach($data['tipo_contrato'] as $c)
                <option value="{{$c->cod_contrato}}">{{$c->contrato}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="plazas">Número de plazas:</label>
            <input  type="number" id="plazas" name="plazas" class="form-control" min="1" max="25" step="1" >
          </div>
          <div class="form-group">
            <label for="edad_min">Edad minima:</label>
            <input type="number" id="edad_min" name="edad_min" class="form-control" min="18" max="65" step="1">
          </div>
          <div class="form-group">
            <label for="edad_max">Edad maxima:</label>
            <input class="form-control" id="edad_max" name="edad_max" type="number" min="18" max="65" step="1">
          </div>
          <div class="form-group">
            <label for="salarion_min">Salario minimo:</label>
            <input type="text" id="salario_min" name="salario_min" class="form-control">
          </div>
          <div class="form-group">
            <label for="salario_max">Salario Maximo:</label>
            <input class="form-control" id="salario_max" name="salario_max" type="text">
          </div>
          <div class="form-group">
            <label for="genero">Seleccona el Genero:</label>
            <select class="form-control" id="genero" name="genero">
              <option value="">Genero</option>
              @foreach($data['generos'] as $g)
                <option value="{{$g->cod_genero}}">{{$g->genero}}</option>
              @endforeach
            </select>
          </div>
          <!-- <div class="form-group">
            <label for="depto">Departamento:</label>
            <select class="form-control" id="depto" name="departamento">
              <option value="">Departamentos</option>
              @foreach($data['departamentos'] as $d)
                <option value="{{$d->cod_departamento}}">{{$d->departamento}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="mun">Municipio:</label>
            <select class="form-control" id="mun" name="municipio">
              <option value="">Municipios</option>
              @foreach($data['municipios'] as $m)
                <option value="{{$m->cod_municipio}}">{{$m->municipio}}</option>
              @endforeach
            </select>
          </div> -->
          <div class="form-group">
            <label for="auto">Auto propio:</label>
            <select class="form-control" id="auto" name="auto">
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tl">Tipo de licencia:</label>
            <select class="form-control" id="tl" name="tipo_licencia">
              @foreach($data['licencias'] as $l)
                <option value="{{$l->cod_licencia}}">{{$l->tipo}}</option>
              @endforeach
            </select>
          </div>
      </div>
      <!--end col-lg-6-->

      <div class="col-lg-6">
        
        <h4>Experiencia laboral</h4>
        <!--EXPERIENCIAS-->
        <div class="listaExp p-1 border rounded mb-3">
         <div class="form-group">
            <label for="expeLaboral">Nombre de la experiencia: </label>
            <select id="expList" class="form-control">
              <option value="">Lista de cargos</option>
              @foreach($data['cargos_empresa'] as $cargo)
                <option value="{{$cargo->cod_cargo}}">{{$cargo->cargo}}</option>
              @endforeach
            </select>
          </div>
          <div class="text-right mb-2">
            <button class="btn btn-primary text-right agregarExp"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
          </div>
          
          
        </div>

          <!--ESTUDIOS-->
        <h4 class="mt-4">Estudios</h4>
        <div  class=" p-1 border rounded mb-3">
            <div class="form-group">
              <label for="estudioList">Area de estudio:</label>
              <select id="#estudioList" class="estudioList form-control">
                <option vale="">Area de estudio</option>
                @foreach($data['areasEstudio'] as $ae)
                  <option value="{{$ae->cod_area_est}}">{{$ae->area_est}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="NivelEstudio">Nivel de estudio:</label>
              <select class="form-control" id="NivelEstudio">
                <option value="0">Nivel de Estudio</option>
                @foreach($data['nivelesEstudio'] as $ne)
                  <option value="{{$ne->cod_nivel_est}}">{{$ne->nivel_estudio}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="especialidad">Especialidad</label>
              <input type="text" class="form-control" id="especialidad">
            </div>
            <div class="text-right mb-2">
              <button class="btn btn-primary text-right agregarEstudio"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
            </div>
            
            <div id="estudios">
              
            </div>
            
        </div>

        <!--HABILIDADES-->
        <h4 class="mt-4">Habilidades</h4>
        <div class=" p-1 border rounded mb-3">
          <div class="form-group">
            <label for="programa">Seleccion el Programa:</label>
            <select class="form-control" id="programa">
              <option value="0">Habilidades</option>
              @foreach($data['programas'] as $p)
                <option value="{{$p->cod_programa}}">{{$p->programa}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nivelPrograma">Nivel:</label>
            <select class="form-control" id="nivelPrograma">
              <option value="0"></option>
              @foreach($data['niveles'] as $n)
                <option value="{{$n->cod_nivel}}">{{$n->nivel}}</option>
              @endforeach
            </select>
          </div>
          <div class="text-right mb-2">
            <button class="btn btn-primary text-right agregarPrograma"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
          </div>

          <div id="programasList">
          
          </div>
        </div>
        
        <!--IDIOMAS-->
        <h4 class="mt-4">Idiomas</h4>
        <div class=" p-1 border rounded mb-3">
          <div class="form-group">
            <label for="idioma">Seleccion el idioma:</label>
            <select class="form-control" id="idioma" >
              <option value="0">Idiomas</option>
              @foreach($data['idiomas'] as $i)
                <option value="{{$i->cod_idioma}}">{{$i->idioma}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nivelI">Nivel:</label>
            <select class="form-control" id="nivelI" >
              <option value="0"></option>
              @foreach($data['niveles'] as $n)
                <option value="{{$n->cod_nivel}}">{{$n->nivel}}</option>
              @endforeach
            </select>
          </div>
          <div class="text-right mb-2">
            <button class="btn btn-primary text-right agregarIdioma"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
          </div>

          <div id="idiomas">
            
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-primary">Guardar</button>
        </div>
      </div>
    
  </div>
</form>
@endsection

@section('jsExtra')
<script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
<script src="/app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="/app-assets/vendors/js/forms/validation/jquery.validate.additional-methods.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });

    // Obtener la fecha actual para los input fecha
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var ffin = d.getFullYear() + '/' + (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day;
    $('#fechaFinEmpresa').attr('max',ffin);

    $("#ofertaLaboral").validate({
            ignore: 'input[type=hidden]', // ignore hidden fields
            errorClass: 'danger',
            successClass: 'success',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            rules: {
                cargo: "required",
                descripcion: "required",
                fechaLimite: "required",
                a_experiencia: "required",
                tipo_contrato: "required",
                plazas: "required",
                edad_min:"required",
                edad_max:"required",
                genero:"required",
                // departamento:"required",
                // municipio:"required",
                auto:"required",
                tipo_licencia:"required",
            },
            messages:{
              cargo:{
                required: "Titulo requerido"
              },
              descripcion:{
                required: "Descripcion requerido"
              },
              fechaLimite:{
                required: "Fecha Limite requerido"
              },
              a_experiencia:{
                required: "Años de experiencia requerido"
              },
              tipo_contrato:{
                required: "Tipo de contrato requerido"
              },
              plazas:{
                required: "Plazas disponibles requerido"
              },
              edad_min:{
                required: "Edad minima requerida"
              },
              edad_max:{
                required: "Titulo requerido"
              },
              genero:{
                required: "Genero requerido"
              },
              // departamento:{
              //   required: "Departamento requerido"
              // },
              // municipio:{
              //   required: "Municipio requerido"
              // },
              auto:"required",
              tipo_licencia:{
                required: "Tipo de licencia requerida"
              },
            }
    });

    $("#ofertaLaboral").submit(function(event){
      event.preventDefault();
      if($(this).valid()){
        var dataF = $(this).serialize();
        $.ajax({
            type: 'post',
            url: '{{route('crearOferta')}}',
            async: false,
            dataType: 'json',
            data:dataF,
            success:function(response){
                if(response.error){
                    toastr.error(response.errorMessage);
                    $out = false;
                }else{
                    $out = true;
                    window.location.replace("{{ route('empresa.dashboard') }}");
                }
            },
            error: function(){
                $out = false;
            }
        });
      }else{
        return false;
      }
    });

    
    // //Actualiza los municipios cuando se selecciona un departamento
    // $(document).on("change","#depto",function(event){
    //     var departamento = $(this).val();
    //     $.ajax({
    //         method: "get",
    //         url: "{{ url('/obtenerMunicipios') }}/"+departamento,
    //     }).done(function( msg ) {
    //         $("#mun").html('<option value="0">Municipios</option>');
    //         $(msg).each(function(k,v){
    //             var html = '<option value="'+v.cod_municipio+'">'+v.municipio+'</option>' ;
    //             $(html).appendTo("#mun");
    //         })
    //     });
    // });

    //Agrega experiencia a la lista
    $(document).on("click",".agregarExp", function(event){
      event.preventDefault();
      var exp = $("#expList");

      var valor = exp.val();

      if(valor!=0){
        var texto = $('#expList option[value="'+valor+'"]').text();
        

        $('#expList option[value="'+valor+'"]').remove();
        exp.val("0");
        
        html = `<div class="card mb-2">
          <input type="hidden" value="${valor}" name="cargos[]"/>
          <div class="card-header d-flex justify-content-between py-1">
            <a class="card-link texto">${texto}</a>
            <i class="fas fa-trash-alt fa-lg pt-1 quitarExp"></i>
          </div>
        </div>`;

        $(html).appendTo('.listaExp');
      }else{
        toastr.error('Elija una experiencia');
      }

    });
    //Quitar experiencia 
    $(document).on('click','.quitarExp',function(event){
      event.preventDefault();

      var elemento = $(this).parent().parent();
      var valor = elemento.find('input').val();
      var texto = elemento.find('.texto').text();

      html=`<option value="${valor}">${texto}</option>`;
      $(html).appendTo('#expList');

      elemento.remove();
    });

    //Agrega estudio a la lista
    $(document).on("click",".agregarEstudio", function(event){
      event.preventDefault();
      var objE = $(".estudioList");
      var obj2 = $("#NivelEstudio");
      
      var valor1 = objE.val();
      var valor2 = obj2.val();
      var especialidad = $("#especialidad").val();
      
      if( valor1 != 0&& valor2 != 0 && especialidad != "")
      {
        objE.val("0");
        var texto1 = $('.estudioList option[value="'+valor1+'"]').text();
        var texto2 = $('#NivelEstudio option[value="'+valor2+'"]').text();
        obj2.val("0");

        $("#especialidad").val("");
        
        html = `<div class="card mb-2">
              <div class="card-header d-flex justify-content-between py-1">
                <input type="hidden" value="${valor1}" name="estudio[]" class="estudioValor" />
                <input type="hidden" value="${valor2}" name="nivelEst[]" />
                <a class="card-link estudioTexto" data-toggle="collapse" href="#es1">${especialidad}</a>
                <i class="fas fa-trash-alt fa-lg pt-1 quitarEstudio"></i>
              </div>
              <div id="es1" class="collapse" data-parent="#estudios">
                <div class="card-body py-1 px-4">
                    <p class="m-0">Area estudio: <span class="text-muted">${texto1}</span></p>
                    <p class="m-0">Nivel estudio: <span class="text-muted">${texto2}</span></p>
                </div>
              </div>
            </div>`;

        $(html).appendTo('#estudios');
      }else{
        toastr.error('Faltan campos en estudio.');
      }

    });
    //Quitar estudio 
    $(document).on('click','.quitarEstudio',function(event){
      event.preventDefault();
      var elemento = $(this).parent().parent();
      elemento.remove();
    });

    //Agrega programa a la lista
    $(document).on("click",".agregarPrograma", function(event){
      event.preventDefault();
      var prg = $("#programa");
      var nivelprg = $("#nivelPrograma");
      
      var valor = prg.val();
      var valor2 = nivelprg.val();

      if(valor != 0 && valor2 != 0){
        var texto = $('#programa option[value="'+valor+'"]').text();
        $('#programa option[value="'+valor+'"]').remove();
        prg.val("0");

        var texto2 = $('#nivelPrograma option[value="'+valor2+'"]').text();
        nivelprg.val("0");
        
        html = `<div class="card mb-2">
            <div class="card-header d-flex justify-content-between py-1">
              <input type="hidden" value="${valor}" name="programa[]" class="programaValor"/>
              <input type="hidden" value="${valor2}" name="nivelPrograma[]" />
              <a class="card-link programaTexto" data-toggle="collapse" href="#p1">${texto}</a>
              <i class="fas fa-trash-alt fa-lg pt-1 quitarPrograma"></i>
            </div>
            <div id="p1" class="collapse" data-parent="#programas">
              <div class="card-body py-1 px-4">
                <p class="m-0">Nivel: <span class="text-muted">${texto2}</span></p>
              </div>
            </div>
          </div>`;

        $(html).appendTo('#programasList');
      }else{
        toastr.error('Faltan campos habilidades.');
      }

    });
    //Quitar programa 
    $(document).on('click','.quitarPrograma',function(event){
      event.preventDefault();

      var elemento = $(this).parent().parent();
      var valor = elemento.find('.programaValor').val();
      var texto = elemento.find('.programaTexto').text();

      html=`<option value="${valor}">${texto}</option>`;
      $(html).appendTo('#programa');

      elemento.remove();
    });

    //Agrega idiomas a la lista
    $(document).on("click",".agregarIdioma", function(event){
      event.preventDefault();
      var idioma = $("#idioma");
      var nivelIdioma = $("#nivelI");

      var valor = idioma.val();
      var valor2 = nivelIdioma.val();

      if(valor != 0 && valor2 !=0){
        var texto = $('#idioma option[value="'+valor+'"]').text();
        $('#idioma option[value="'+valor+'"]').remove();
        idioma.val("0");

        var texto2 = $('#nivelI option[value="'+valor2+'"]').text();
        nivelIdioma.val("0");

        html = `<div class="card mb-2">
            <div class="card-header d-flex justify-content-between py-1">
              <input type="hidden" value="${valor}" name="idioma[]" class="valorIdioma"/>
              <input type="hidden" value="${valor2}" name="idiomaNivel[]" />
              <a class="card-link textoIdioma" data-toggle="collapse" href="#i1">${texto}</a>
              <i class="fas fa-trash-alt fa-lg pt-1 quitarIdioma"></i>
            </div>
            <div id="i1" class="collapse" data-parent="#idiomas">
              <div class="card-body py-1 px-4">
                <p class="m-0">Nivel: <span class="text-muted">${texto2}</span></p>
              </div>
            </div>
          </div>`;

        $(html).appendTo('#idiomas');
      }else{
        toastr.error('Falta seleccionar campos en idiomas.');
      }
    });
    //Quitar idiomas 
    $(document).on('click','.quitarIdioma',function(event){
      event.preventDefault();

      var elemento = $(this).parent().parent();
      var valor = elemento.find('.valorIdioma').val();
      var texto = elemento.find('.textoIdioma').text();

      html=`<option value="${valor}">${texto}</option>`;
      $(html).appendTo('#idioma');

      elemento.remove();
    });
  });
</script>
@endsection