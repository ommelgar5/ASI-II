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
        <textarea class="form-control" rows="3" id="descripcion"></textarea>
      </div>
      <div class="form-group">
        <label for="ae">Años de experiencias laboral:</label>
        <select class="form-control" id="ae">
          <option value="1">Sin experiencia</option>
          <option value="2">menos de un año</option>
          <option value="3">de un año a tres años</option>
          <option value="4">de un año a tres años</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tc">Tipo de contrato:</label>
        <select class="form-control" id="tc">
          <option value="1">Tiempo indefinido</option>
          <option value="2">Período determinado</option>
          <option value="3">Servicio profesional</option>
          <option value="4">Interinato</option>
        </select>
      </div>
      <div class="form-group">
        <label for="descripcion">Número de plazas:</label>
        <input  type="number" class="form-control" min="1" max="25" >
      </div>
      <div class="form-group">
        <label for="descripcion">Edad minima:</label>
        <input type="number"  class="form-control" min="18" max="65">
      </div>
      <div class="form-group">
        <label for="descripcion">Edad maxima:</label>
        <input class="form-control" type="number" min="18" max="65">
      </div>
      <div class="form-group">
        <label for="descripcion">Salario minimo:</label>
        <input type="text"  class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion">Salario Maximo:</label>
        <input class="form-control" type="text">
      </div>
      <div class="form-group">
        <label for="genero">Seleccona el Genero:</label>
        <select class="form-control" id="genero" name="genero">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
          <option value="3">Indiferente</option>
        </select>
      </div>
      <div class="form-group">
        <label for="depto">Departamento:</label>
        <select class="form-control" id="depto" name="deptop">
          <option value="1">La Libertad</option>
          <option value="2">San Salvador</option>
        </select>
      </div>
      <div class="form-group">
        <label for="mun">Departamento:</label>
        <select class="form-control" id="mun" name="deptop">
          <option value="1">Ciudad Arce</option>
          <option value="2">Santa Tecla</option>
        </select>
      </div>
      <div class="custom-control custom-radio w-25 d-inline-block">
        <input type="radio" class="custom-control-input" id="vlic" name="vlic" value="customEx">
        <label class="custom-control-label" for="vlic">Si</label>
      </div>
      <div class="custom-control custom-radio w-25 d-inline-block">
        <input type="radio" class="custom-control-input" id="vlic2" name="vlic" value="customEx">
        <label class="custom-control-label" for="vlic2">no</label>
      </div>
      <div class="form-group">
        <label for="tl">Tipo de licencia:</label>
        <select class="form-control" id="tl">
          <option value="1">Liviana</option>
          <option value="2">Motocicliste</option>
          <option value="3">Particular</option>
          <option value="4">Pesada</option>
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
            <option value="1">Redes Informáticas</option>
            <option value="2">Comunicaciones</option>
            <option value="3">Economía</option>
            <option value="4">Eléctrica</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ne">Nivel de estudio:</label>
          <select class="form-control" id="ne" name="ne">
            <option value="1">Estudiante de Diploma Técnico</option>
            <option value="1">Estudiante Universitario (5to Año)</option>
            <option value="2">Estudiante Universitario (4to Año)</option>
            <option value="3">Estudiante Universitario (1er Año)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="especialidad">Especialidad</label>
          <input type="text" class="form-control" name="especialidad" id="especialidad">
        </div>
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
          <option value="1">Word</option>
          <option value="2">Excel</option>
          <option value="3">PowerPoint</option>
        </select>
      </div>
      <div class="form-group">
        <label for="nivel">Nivel:</label>
        <select class="form-control" id="nivel" name="nivel">
          <option value="1">Basico</option>
          <option value="1">Intermedio</option>
          <option value="2">Avanzado</option>
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
          <option value="1">Ingles</option>
          <option value="2">Frances</option>
          <option value="3">Italiano</option>
        </select>
      </div>
      <div class="form-group">
        <label for="nivelI">Nivel:</label>
        <select class="form-control" id="nivelI" name="nivelI">
          <option value="1">Basico</option>
          <option value="1">Intermedio</option>
          <option value="2">Avanzado</option>
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