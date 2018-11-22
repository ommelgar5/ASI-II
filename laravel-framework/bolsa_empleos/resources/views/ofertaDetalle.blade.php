@extends('layouts.aplicanteTemplate')

@section('contenido')
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
      		en base a experiencia
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
  
  <!-- <h2 style="font-size: 1.2em">Información adicional</h2>
  <div class="mb-3">
    <p>Es el responsable de asesorar al cliente durante el proceso de compra siguiendo los estándares establecidos
       en el área, colabora en inventarios, ordena, surte y plancha mercadería.</p
    <p>Cualidades:</p>
    <ul>
      <li>Persuasivo</li>
      <li>Empático</li>
      <li>responsable</li>
      <li>Dinámico</li>
      <li>Enfocado a resultados</li>
      <li>Habilidad de negociació</li>
    </ul>
    <p>NOTA: las plazas son permanentes y de tiempo completo, de preferencia residir en Santa Tecla, Merliot,
       Antiguo Cuscatlán o zonas cercanas a la sucursal.</p>
  </div> -->
  
  <div class="text-center mb-3">
    <a href="{{ route('aplicar',['id'=> $oferta->cod_oferta]) }}" class="btn btn-primary">Aplicar</a>
  </div>
  
</div>
@endsection