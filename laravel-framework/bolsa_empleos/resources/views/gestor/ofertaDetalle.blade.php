@extends('layouts.adminGestor')

@section('content')
<div class="border rounded px-3">
  <!--HEADER-->
  <h2  class="text-center my-3" style="font-size: 1.2em">{{$oferta->titulo}}</h2>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 text-center pt-0">
        <img src="/storage/public/empresas_logo/{{$oferta->empresa->logo}}" alt="{{$oferta->empresa->logo}}" style="width: 80px; height: 80px">
      </div>
      <div class="col-md-10">{{$oferta->descripcion}}</div>
    </div>
  </div>
  
  <!--DETALLE OFERTA-->
  <h2 style="font-size: 1.2em">Detalla Oferta</h2>

  <table class="mb-3">
    <thead>
      <th>Información</th>
      <th>Dato</th>
    </thead>
    <tbody>
    <tr>
      <td>Nombre de la empresa</td>
      <td>{{$oferta->empresa->nombre_comercial}}</td>
    </tr>
    <tr>
      <td>
        @if($oferta->cargo_empresa->count() > 1)
          Cargos
        @else
          Cargo
        @endif
      </td>
      <td>
        @foreach($oferta->cargo_empresa as $cargo)
          - {{$cargo->cargo}}<br>
        @endforeach
      </td>
    </tr>
    <tr>
      <td>Número de puestos</td>
      <td>{{$oferta->numero_plaza}}</td>
    </tr>
    <tr>
      <td>Tipo de contratación</td>
      <td>{{$oferta->tipo_contrato->contrato}}</td>
    </tr>
    <tr>
      <td>Nivel de experiencia</td>
      <td>{{$oferta->a_experiencia->a_experiecia}}</td>
    </tr>
    <tr>
      <td>Género</td>
      <td>{{$oferta->genero->genero}}</td>
    </tr>
    <tr>
      <td>Edad</td>
      <td>{{$oferta->edad_min}} / {{$oferta->edad_max}}</td>
    </tr>
    <tr>
      <td>Salario min($) / max($)</td>
      <td>
      	@if($oferta->salario_min && $oferta->salario_max)
      		{{ $oferta->salario_min }} / {{ $oferta->salario_max }}
      	@elseif($oferta->salario_min)
      		{{ $oferta->salario_min }}
      	@elseif($oferta->salario_max)
      		{{ $oferta->salario_max }}
      	@else
      		con base a experiencia
      	@endif
      </td>
    </tr>
    <tr>
      <td>Vehículo</td>
      <td>
      	@if($oferta->vehiculo)
      		Indispensable
      	@else
          Indiferente
      	@endif
      </td>
    </tr>
    <tr>
      <td>Licencia</td>
      <td>{{$oferta->licencia->tipo}}</td>
    </tr>
    <!-- <tr>
      <td>Departamento</td>
      <td>La Libertad</td>
    </tr>
    <tr>
      <td>Municipio</td>
      <td>Santa Tecla</td>
    </tr> -->
    </tbody>
  </table>

  <h2 style="font-size: 1.2em">Experiencias</h2>
  <table class="mb-3">
    <thead>
    <th>Experiencias requeridas</th>
    </thead>
    <tbody>
    <tr>
      <td>curso de ventas</td>
    </tr>
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Estudios</h2>
  <table class="mb-3">
    <thead>
	    <th>Estudio</th>
	    <!-- <th>Nivel academico</th> -->
    </thead>
    <tbody>
	    
	    <tr>
	      <td>Diplomado en Ventas</td>
	      <!-- <td>Completo</td> -->
	    </tr>
	    
	    @foreach($oferta->niveles_estudio as $estudios)
	    <tr>
	    	<td>{{ $estudios->nivel_estudio }}</td>
	    </tr>
	    @endforeach
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Tecnologías</h2>
  <table class="mb-3">
    <thead>
	    <th>Tecnologia</th>
	    <th>Nivel</th>
    </thead>
    <tbody>
	    @foreach($oferta->programas_oferta as $programa_oferta)
	    	<tr>
	    		<td>{{ $programa_oferta->programa->programa }}</td>
	    		<td>{{ $programa_oferta->nivel->nivel }}</td>
	    @endforeach
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Idiomas</h2>
  <table class="mb-3">
    <thead>
	    <th>Idioma</th>
	    <th>Nivel</th>
    </thead>
    <tbody>
	    @foreach($oferta->idiomas_oferta as $idioma_oferta)
	    <tr>
	      <td>{{$idioma_oferta->idioma->idioma}}</td>
	      <td>{{$idioma_oferta->nivel->nivel}}</td>
	    </tr>
	    @endforeach
    </tbody>
  </table>
</div>

<br>
<br>
<br>
<h5> Aplicantes </h5>
<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
  <div class="row">
      <div class="col-sm-12">

          <table width="100%"
                 class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline table-responsive"
                 style="width: 100%;">
              <thead>
              <tr role="row">
                  <th rowspan="1" colspan="1" style="width: 13%;"></th>
                  <th rowspan="1" colspan="1" style="width: 20%;">Nombre</th>
                  <th rowspan="1" colspan="1" style="width: 10%;">Fecha nacimiento</th>
                  <th rowspan="1" colspan="1" style="width: 20%;">Genero</th>
                  <th rowspan="1" colspan="1" style="width: 20%">Estado civil</th>
                  <th rowspan="1" colspan="1">Acciones</th>
              </tr>
              </thead>
              <tbody style="font-size: .8em;">
              @foreach( $oferta->aplicaciones()->get() as $aplicante)
                  <tr class="gradeA odd" role="row">
                    <td><img src="{{ $aplicante->persona->usuarios->first()->avatar }}" /> </td>
                    <td>{{ $aplicante->persona->nombre }} {{ $aplicante->persona->apellido }} </td>
                    <td>{{ $aplicante->persona->fech_nac }}</td>
                    <td>{{ $aplicante->persona->genero->genero }}</td>
                    <td>{{ $aplicante->persona->estadocivil->estado }}</td>
                    <td class="text-center">
                      <a href="{{route('gestor.oferta', ['id' => $oferta->cod_oferta])}}" id="detalle"  class="btn btn-primary btn-xs" style="margin-left: 3em;"> Detalle</a>
                    </td>
                  </tr>
              @endforeach
              </tbody>
          </table>

          <div class="text-center">
              {!! $oferta->aplicaciones->render() !!}
          </div>

      </div>
  </div>
</div>
@endsection