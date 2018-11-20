@extends('layouts.aplicanteTemplate')

@section('contenido')
<div class="border rounded px-3">
  <!--HEADER-->
  <h2  class="text-center my-3" style="font-size: 1.2em">{{$oferta->titulo}}</h2>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 text-center pt-0">
        <img src="/storage/empresas_logo/{{$oferta->empresa->logo}}" alt="{{$oferta->empresa->logo}}" style="width: 80px; height: 80px">
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
      <td>Cargo</td>
      <td>{{$oferta->cargo->cargo}}</td>
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
      <td>{{$oferta->tiempo_experiencia->a_experiecia}}</td>
    </tr>
    <tr>
      <td>Género</td>
      <td>{{$oferta->genero->genero}}</td>
    </tr>
    <tr>
      <td>edad</td>
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
      		Indiferente
      	@else
      		Indispensable
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
	    <th>Nivel academico</th>
    </thead>
    <tbody>
	    

	    <tr>
	      <td>Diplomado en Ventas</td>
	      <td>Completo</td>
	    </tr>
	    
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Tecnologías</h2>
  <table class="mb-3">
    <thead>
    <th>Tecnologia</th>
    <th>Nivel</th>
    </thead>
    <tbody>
    <tr>
      <td>Word</td>
      <td>Intermedio</td>
    </tr>
    <tr>
      <td>Excel</td>
      <td>Básico</td>
    </tr>
    <tr>
      <td>PowerPoint</td>
      <td>Avanzado</td>
    </tr>
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Idiomas</h2>
  <table class="mb-3">
    <thead>
    <th>Idioma</th>
    <th>Nivel</th>
    </thead>
    <tbody>
    <tr>
      <td>Inglés</td>
      <td>Básico</td>
    </tr>
    </tbody>
  </table>
  <h2 style="font-size: 1.2em">Información adicional</h2>
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
  </div>
  <div class="text-center mb-3">
    <a href="#" class="btn btn-primary">Aplicar</a>
  </div>
  
</div>
@endsection