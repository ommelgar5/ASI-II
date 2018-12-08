@extends('layouts.empresaTemplate')


@section('titulo','Curriculum')

@section('contenido')

    <main class="container my-3">
        <div class="border rounded px-3">

            <h3 class="text-center">Curriculum Vitae</h3>
            <div class="text-center">
                
                @if($persona->usuarios->first()->avatar)
                  <img src="/storage/public/aplicantes_avatar/{{ $persona->usuarios->first()->avatar }}" align="user.png" width="120">
                @else
                  <img class="card-img-top rounded" src="/assets/img/users/user.png" alt="user.png" style="max-width: 150px">
                @endif
            </div>
            <h4>Información personal</h4>
            <table class="mb-3">
                <thead>
                <th>Información</th>
                <th>Dato</th>
                </thead>
                <tbody>
                <tr>
                    <td>Nombre</td>
                    <td>{{ $persona->nombre }}</td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td> {{ $persona->apellido }}</td>
                </tr>
                <tr>
                    <td>DUI</td>
                    <td> {{ $persona->dui }}</td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td> {{ $persona->correo }}</td>
                </tr>
                <tr>
                    <td>Telefono 1</td>
                    <td> {{ $persona->telefono1 }}</td>
                </tr>
                <tr>
                    <td>Telefono 2</td>
                    @if( $persona->telefono2)
                        <td> {{ $persona->telefono2 }}</td>
                    @else
                        <td> ---- ----</td>
                    @endif
                </tr>
                <tr>
                    <td>Direccón</td>
                    <td> {{ $direccion->lugar }}</td>
                </tr>
                <tr>
                    <td>Municipio</td>
                    <td>{{ $direccion->municipio->municipio }}</td>
                </tr>
                <tr>
                    <td>Departamento</td>
                    <td>{{ $direccion->municipio->departamento->departamento }}</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    @php
                        function edad($fecha) {
                            $tiempo = strtotime($fecha);
                            $ahora = time();
                            $edad = ($ahora-$tiempo)/(60*60*24*365.25);
                            $edad = floor($edad);
                            return $edad;
                        }
                    @endphp

                    <td> {{ edad($persona->fech_nac). ' años' }}</td>
                </tr>
                <tr>
                    <td>Años de experiencia</td>
                    <td>{{ $persona->a_experiencia->a_experiecia }}</td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>{{ $persona->estadocivil->estado }}</td>
                </tr>
                <tr>
                    <td>Vehículo</td>
                    @if( $persona->vehiculo)
                        <td>Si posee vehículo</td>
                    @else
                        <td>No posee vehículo</td>
                    @endif
                </tr>
                <tr>
                    <td>Tipo de licencia</td>
                    <td> {{ $persona->licencia->tipo }}</td>
                </tr>
                </tbody>
            </table>
            <h4 class="mb-3">Experiencia Laboral</h4>
            <table class="mb-3">
                <thead>
                <th>Información</th>
                <th>Dato</th>
                </thead>
                <tbody>
                @foreach( $persona->experiencia_laboral as $experiencia)
                    <tr class="text-center">
                        <td colspan="2"> {{ $experiencia->cargo_empresa->cargo }} - {{ $experiencia->empresa }}</td>
                    </tr>
                    <tr>
                        <td>Cargo</td>
                        <td>{{ $experiencia->cargo_empresa->cargo }}</td>
                    </tr>
                    <tr>
                        <td>Descripción</td>
                        <td>{{ $experiencia->descripcion }}</td>
                    </tr>
                    <tr>
                        <td>Fecha inicio</td>
                        <td>{{ date('d-m-Y',strtotime($experiencia->a_inicio)) }}</td>
                    </tr>
                    <tr>
                        <td>Fecha fin</td>
                        @if($experiencia->actual)
                            <td>Actual</td>
                        @else
                            <td>{{ date('d-m-Y',strtotime($experiencia->a_fin)) }}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h4>Estudios</h4>
            <table class="mb-3">
                <thead>
                <th>Información</th>
                <th>Dato</th>
                </thead>
                <tbody>
                @foreach( $persona->estudios as $estudio)
                    <tr class="text-center">
                        <td colspan="2">{{ $estudio->especialidad }}</td>
                    </tr>
                    <tr>
                        <td>Área de estudio</td>
                        <td>{{ $estudio->area_estudio->area_est }}</td>
                    </tr>
                    <tr>
                        <td>Nivel de estudio</td>
                        <td> {{ $estudio->nivel_estudio->nivel_estudio }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de la institución</td>
                        <td>{{ $estudio->nombre_institucion }}</td>
                    </tr>
                    <tr>
                        <td>Año inicio</td>
                        <td>{{ date('d-m-Y',strtotime($estudio->a_inicio)) }}</td>
                    </tr>
                    <tr>
                        <td>Año fin</td>
                        @if($estudio->actual)
                            <td>Actual</td>
                        @else
                            <td>{{ date('d-m-Y',strtotime($estudio->a_fin)) }}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h4>Habilidades</h4>
            <table class="mb-4">
                <thead>
                <th>Habilidad</th>
                <th>Nivel</th>
                </thead>
                <tbody>
                @foreach( $programas as $programa)
                    <tr>
                        <td>{{ $programa->programa->programa }}</td>
                        <td>{{ $programa->nivel->nivel }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h4>Idiomas</h4>
            <table class="mb-3">
                <thead>
                <th>Idioma</th>
                <th>Nivel</th>
                </thead>
                <tbody>
                @foreach( $idiomas as $idioma)
                    <tr>
                        <td>{{ $idioma->idioma->idioma }}</td>
                        <td>{{ $idioma->nivel->nivel }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center mb-3">
                <a class="btn btn-primary" href="#">Guardar Curriculum</a>
            </div>

        </div>

        </div>
    </main>

@endsection

