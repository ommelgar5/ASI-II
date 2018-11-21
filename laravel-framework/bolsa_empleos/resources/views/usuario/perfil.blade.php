@extends('layouts.perfilUser')

    @section('content')

          <div class="col-lg-4">
        
        <!--AVATAR-->
        <div class="card my-4 border-0">
          <div class="text-center mt-2">
            <img class="card-img-top rounded" src="assets/img/users/user.png" alt="user.png" style="max-width: 150px">
          </div>
          <div class="card-body">
            <h4 class="card-title">{{ $persona->nombre }} {{ $persona->apellido }}</h4>
            <a href="/editPerfil" class="btn btn-primary">Editar Perfil</a>
          </div>
        </div>
  
        <!--IFORMACION PERSONAL-->
        <div id="if" class="mb-3">
    
          <div class="card mb-2">
            <div class="card-header py-1">
              <a class="card-link d-block" data-toggle="collapse" href="#if1">
                Información personal
              </a>
            </div>
            <div id="if1" class="collapse show" data-parent="#if">
              <div class="card-body" style="font-size: .8em">
                <div>Fecha de nacimiento: <span class="text-muted">{{ $persona->fech_nac }}</span></div>
                <div>Telefono 1:  <span class="text-muted">{{ $persona->telefono1 }}</span></div>
                  @if( $persona->telefono2)
                    <div>Telefono 2:  <span class="text-muted">--------</span></div>
                  @else
                    <div>Telefono 2:  <span class="text-muted">{{ $persona->telefono2 }}</span></div>
                  @endif
                <div>correo:  <span class="text-muted">{{ $persona->correo }}</span></div>
                <div>Estado civil: <span class="text-muted">{{ $persona->estadocivil->estado }} </span></div>
                <div>Direción:</div>
                <p class="text-muted m-0">San Salvador, 23 av. Sur casi al Norte, Juan Pablo V, Roma</p>
                <div>Años de experiencia:  <span class="text-muted">{{ $persona->a_experiencia->a_experiecia }}</span></div>
                @if( $persona->vehiculo)
                  <div>Vehiculo: <span class="text-muted">Si</span></div>
                @else
                  <div>Vehiculo: <span class="text-muted">No</span></div>
                @endif
                <div>Licencia: <span class="text-muted">{{ $persona->licencia->tipo }}</span></div>
              </div>
            </div>
          </div>
    
          
        </div>

        <!--IDIMAS-->
        <h3 style="font-size: 1.1em" class="text-center">Idiomas</h3>
        <div id="idioma" class="mb-3">
    
          <div class="card mb-2">
            <div class="card-header py-1">
              <a class="card-link d-block" data-toggle="collapse" href="#i1">
                Idiomas
              </a>
            </div>
            <div id="i1" class="collapse show" data-parent="#idioma">
              <div class="card-body" style="font-size: .8em">
                <!--Agrupadas-->
                @foreach( $idiomas as $idioma )
                <div class="mb-2">
                  <div>Idioma: <span class="text-muted">{{ $idioma->idioma->idioma }}</span></div>
                  <div>nivel: <span class="text-muted"> {{ $idioma->nivel->nivel}}</span></div>
                </div>
               @endforeach
              </div>
            </div>
          </div>
      </div>
 
    </div>
    <!--end col 4-->
      
      <div class="col-lg-8">
        
          <!--ESPECIENCIAS LABORALES-->
          <h3 style="font-size: 1.1em" class="text-center ">Expeciencias profesionales</h3>
          <div id="accordion" class="mb-3">
            @foreach( $persona->experiencia_laboral as $experiencia)
            <div class="card mb-2">
              <div class="card-header py-1">
                <a class="card-link d-block" data-toggle="collapse" href="#esl{{ $experiencia->cod_experiencia }}">
                 {{ $experiencia->puesto }} - {{ $experiencia->empresa }}
                </a>
              </div>
              <div id="esl{{ $experiencia->cod_experiencia }}" class="collapse" data-parent="#accordion">
                <div class="card-body" style="font-size: .8em">
                  <div>Empresa: <span class="text-muted">{{ $experiencia->empresa }}</span></div>
                  <div>Giro de la empresa:  <span class="text-muted">{{ $experiencia->giro_empresa->giro }}</span></div>
                  <div>Cargo: <span class="text-muted">{{ $experiencia->cargo_empresa->cargo }}</span></div>
                  <div>Descripcion:</div>
                  <p class="text-muted">{{ $experiencia->descripcion }}</p>
                  <span>Fecga inicio:</span> <span class="text-muted mr-4">{{ $experiencia->a_inicio }}</span>
                  @if( $experiencia->a_fin )
                    <span>Fecha fin:</span> <span class="text-muted">{{ $experiencia->a_fin }}</span>
                  @else
                  <span>Fecha fin:</span> <span class="badge badge-pill badge-primary ml-1">Actual</span>
                  @endif
                </div>
              </div>
              </div>
              @endforeach
          </div>

          <!--ESTUDIOS-->
          <h3 style="font-size: 1.1em" class="text-center ">Estudios</h3>
          <div id="ed" class="mb-3">
            @foreach ( $persona->estudios as $estudio)
            <div class="card mb-2">
              <div class="card-header py-1">
                <a class="card-link d-block" data-toggle="collapse" href="#es{{ $estudio->cod_estudio }}">
                  {{ $estudio->especialidad}}
                </a>
              </div>
              <div id="es{{ $estudio->cod_estudio }}" class="collapse" data-parent="#ed">
                <div class="card-body" style="font-size: .8em">
                  <div>Area de estudio: <span class="text-muted">{{ $estudio->area_estudio->area_est }}</span></div>
                  <div>Nivel: <span class="text-muted">{{ $estudio->nivel_estudio->nivel_estudio }}</span></div>
                  <div>Nombre institucion:  <span class="text-muted">{{ $estudio->nombre_institucion }}</span></div>
                  <span>Fecha inicio:</span> <span class="text-muted mr-4">{{ $estudio->a_inicio }}</span>
                  @if( $estudio->a_fin )
                  <span>Fecha fin:</span> <span class="text-muted">{{ $estudio->a_fin }}</span>
                  @else
                  <span>Fecha fin:</span> <span class="badge badge-pill badge-primary ml-1">Actual</span>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>
        
          <!--HABILIDADES-->
          <h3 style="font-size: 1.1em" class="text-center">Habilidades</h3>
          <div id="habilidades" class="mb-3">
  
            <div class="card mb-2">
              <div class="card-header py-1">
                <a class="card-link d-block" data-toggle="collapse" href="#h1">
                Programas
                </a>
              </div>
              <div id="h1" class="collapse" data-parent="#habilidades">
                <div class="card-body" style="font-size: .8em">
                  <!--Agrupadas-->
                  @foreach( $programas as $programa )
                  <div class="mb-2">
                    <div>Programa: <span class="text-muted">{{ $programa->programa->programa}}</span></div>
                    <div>nivel: <span class="text-muted">{{ $programa->nivel->nivel }}</span></div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
    
      </div>
      <!-- End col 8 -->

    @endsection