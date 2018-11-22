@extends('layouts.empresaTemplate')

@section('contenido')
<div class="row">
  <div class="col-lg-6">
    <h4>Detalle de la Oferta</h4>
    <form action="#" class="border p-2 rounded mb-3">
      <div class="form-group">
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" id="cargo" class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <textarea class="form-control" rows="3" id="descripcion" name="descipcion"></textarea>
      </div>
      <div class="form-group">
        <label for="ae">Años de experiencias laboral:</label>
        <select class="form-control" id="ae" name="a_experiencia">
          @foreach($data['a_experiencia'] as $a)
            <option value="{{$a->cod_a_experiencia}}">{{$a->a_experiencia}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tc">Tipo de contrato:</label>
        <select class="form-control" id="tc" name="tipo_contrato">
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
          @foreach($data['generos'] as $g)
            <option value="{{$g->cod_genero}}">$g->genero</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="depto">Departamento:</label>
        <select class="form-control" id="depto" name="departamento">
          @foreach($data['departamentos' as $d])
            <option value="{{$d->cod_departamento}}">{{$d->departamento}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="mun">Municipio:</label>
        <select class="form-control" id="mun" name="municipio">
          @foreach($data['municipios' as $m])
            <option value="{{$m->cod_municipio}}">{{$m->municipio}}</option>
          @endforeach
        </select>
      </div>
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
    </form>

  </div>
  <!--end col-lg-6-->


  <div class="col-lg-6">
    
    <h4>Experiencia laboral</h4>
    <!--EXPERIENCIAS-->
    <form action="#" class=" p-1 border rounded mb-3">
     
      <div class="form-group">
        <label for="expeLaboral">Nombre de la experiencia: </label>
        <input type="text" class="form-control" name="expeLaboral" id="expeLaboral">
      </div>
      <div class="text-right mb-2">
        <button class="btn btn-primary text-right"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
      </div>
      
      <div class="card mb-2">
        <div class="card-header d-flex justify-content-between py-1">
          <a class="card-link" data-toggle="collapse" href="#es1">Gefe de Recusos Humanos</a>
          <i class="fas fa-trash-alt fa-lg pt-1"></i>
        </div>
      </div>
  
      <div class="card mb-2">
        <div class="card-header d-flex justify-content-between py-1">
          <a class="card-link" data-toggle="collapse" href="#es2">Asistente de personal</a>
          <i class="fas fa-trash-alt fa-lg pt-1"></i>
        </div>
      </div>
    </form>

      <!--ESTUDIOS-->
    <h4 class="mt-4">Estudios</h4>
    <form action="#" class=" p-1 border rounded mb-3">
        <div class="form-group">
          <label for="areaEs">Area de estudio:</label>
          <select class="form-control" id="areaEs" name="ae">
            @foreach($data['areasEstudio'] as $ae)
              <option value="{{$ae->cod_area_est}}">{{$ae->area_est}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="ne">Nivel de estudio:</label>
          <select class="form-control" id="ne" name="ne">
            @foreach($data['nivelesEstudio'] as $ne)
              <option value="{{$ne->cod_nivel_est}}">{{$ne->nivel_estudio}}</option>
            @endforeach
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="especialidad">Especialidad</label>
          <input type="text" class="form-control" name="especialidad" id="especialidad">
        </div> -->
        <div class="text-right mb-2">
          <button class="btn btn-primary text-right"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
        </div>
        
        <div id="estudios">
          <div class="card mb-2">
            <div class="card-header d-flex justify-content-between py-1">
              <a class="card-link" data-toggle="collapse" href="#es1">Técnico en Ingenieria en Redes Informaticas</a>
              <i class="fas fa-trash-alt fa-lg pt-1"></i>
            </div>
            <div id="es1" class="collapse" data-parent="#estudios">
              <div class="card-body py-1 px-4">
                  <p class="m-0">Area estudio: <span class="text-muted">Redes Informáticas</span></p>
                  <p class="m-0">Nivel estudio: <span class="text-muted">Estudiante de Diploma Técnico</span></p>
              </div>
            </div>
          </div>
          
          <div class="card mb-2">
            <div class="card-header d-flex justify-content-between py-1">
              <a class="card-link" data-toggle="collapse" href="#es2">Ingenieria en Sistemas</a>
              <i class="fas fa-trash-alt fa-lg pt-1"></i>
            </div>
            <div id="es2" class="collapse" data-parent="#estudios">
              <div class="card-body py-1 px-4">
                <p class="m-0">Area estudio: <span class="text-muted">Informática</span></p>
                <p class="m-0">Nivel estudio: <span class="text-muted">Estudiante Universitario (4to Año)</span></p>
              </div>
            </div>
          </div>
        </div>
        
    </form>

    <!--HABILIDADES-->
    <h4 class="mt-4">Habilidades</h4>
    <form action="#" class=" p-1 border rounded mb-3">
      <div class="form-group">
        <label for="programa">Seleccion el Programa:</label>
        <select class="form-control" id="programa" name="naprograma">
          @foreach($data['programas'] as $p)
            <option value="{{$p->cod_programa}}">{{$p->programa}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="nivel">Nivel:</label>
        <select class="form-control" id="nivel" name="nivel">
          @foreach($data['niveles'] as $n)
            <option value="{{$n->cod_nivel}}">{{$n->nivel}}</option>
          @endforeach
        </select>
      </div>
      <div class="text-right mb-2">
        <button class="btn btn-primary text-right"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
      </div>

      <div id="programas">
        <div class="card mb-2">
          <div class="card-header d-flex justify-content-between py-1">
            <a class="card-link" data-toggle="collapse" href="#p1">Excel</a>
            <i class="fas fa-trash-alt fa-lg pt-1"></i>
          </div>
          <div id="p1" class="collapse" data-parent="#programas">
            <div class="card-body py-1 px-4">
              <p class="m-0">Nivel: <span class="text-muted">Basico</span></p>
            </div>
          </div>
        </div>
    
        <div class="card mb-2">
          <div class="card-header d-flex justify-content-between py-1">
            <a class="card-link" data-toggle="collapse" href="#p2">Word</a>
            <i class="fas fa-trash-alt fa-lg pt-1"></i>
          </div>
          <div id="p2" class="collapse" data-parent="#programas">
            <div class="card-body py-1 px-4">
              <p class="m-0">Nivel: <span class="text-muted">Avanzado</span></p>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    <!--IDIOMAS-->
    <h4 class="mt-4">Idiomas</h4>
    <form action="#" class=" p-1 border rounded mb-3">
      <div class="form-group">
        <label for="idioma">Seleccion el idioma:</label>
        <select class="form-control" id="idioma" name="naidioma">
          @foreach($data['idiomas'] as $i)
            <option value="{{$i->cod_idioma}}">{{$i->idioma}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="nivelI">Nivel:</label>
        <select class="form-control" id="nivelI" name="nivelI">
          @foreach($data['niveles'] as $n)
            <option value="{{$n->cod_nivel}}">{{$n->nivel}}</option>
          @endforeach
        </select>
      </div>
      <div class="text-right mb-2">
        <button class="btn btn-primary text-right"><i class="fas fa-plus-circle mr-2 fa-lg"></i>Agregar</button>
      </div>

      <div id="idiomas">
        <div class="card mb-2">
          <div class="card-header d-flex justify-content-between py-1">
            <a class="card-link" data-toggle="collapse" href="#i1">Excel</a>
            <i class="fas fa-trash-alt fa-lg pt-1"></i>
          </div>
          <div id="i1" class="collapse" data-parent="#idiomas">
            <div class="card-body py-1 px-4">
              <p class="m-0">Nivel: <span class="text-muted">Basico</span></p>
            </div>
          </div>
        </div>
    
        <div class="card mb-2">
          <div class="card-header d-flex justify-content-between py-1">
            <a class="card-link" data-toggle="collapse" href="#i2">Word</a>
            <i class="fas fa-trash-alt fa-lg pt-1"></i>
          </div>
          <div id="i2" class="collapse" data-parent="#idiomas">
            <div class="card-body py-1 px-4">
              <p class="m-0">Nivel: <span class="text-muted">Avanzado</span></p>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="text-center">
      <button class="btn btn-primary">Guardar</button>
    </div>
    
  </div>
</div>
@endsection