@extends('layouts.adminEmpresa')


    @section('content')
        <div class="container" style="max-width: 80%">

            <h2 class="text-muted">Detalle oferta</h2>

                <div class="panel panel-primary mb-2 text- mb-3">
                    <div class="panel-heading py-1" >
                        <div class="row p-0 m-0">
                            <span class="col-xs-10">{{ $oferta->titulo }} {{ $oferta->fecha }}</span>
                            <a href="/editDetalle/{{ $oferta->cod_oferta }}/edit" style="color: white;" class="col-xs-2 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div>Descripcion: </div>
                        <p class="text-muted">{{ $oferta->descripcion }}</p>
                        <div>Número de plazas:  <span class="text-muted">{{ $oferta->numero_plaza }}</span></div>
                        <div>Contrato: <span class="text-muted">{{ $oferta->tipo_contrato->contrato }}</span></div>
                        <div>Años Experiencia: <span class="text-muted">{{ $oferta->a_experiencia->a_experiecia }}</span></div>
                        <div>Genero: <span class="text-muted">{{ $oferta->genero->genero }}</span></div>
                        <div>Edad minima: <span class="text-muted">{{ $oferta->edad_min }}</span></div>
                        <div>Edad maxima: <span class="text-muted">{{ $oferta->edad_max }}</span></div>
                        <div>Salario minimo: <span class="text-muted">${{ $oferta->salario_min }}</span></div>
                        <div>Salario maximo: <span class="text-muted">${{ $oferta->salario_max }}</span></div>

                        @if($oferta->vehiculo)
                            <div>Vehículo: <span class="text-muted">Si</span></div>
                        @else
                            <div>Vehículo: <span class="text-muted">No</span></div>
                        @endif
                        <div>Tipo de licencia: <span class="text-muted">{{ $oferta->licencia->tipo }}</span></div>
                    </div>
                </div>

            <h2>Experiecia requerida en los cargos</h2>

            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-10">Experiencia </span>
                        <a href="/editExper/{{ $oferta->cod_oferta }}" style="color: white;" class="col-xs-2 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ol>
                        @foreach($oferta->cargo_empresa as $cargo)
                            <li class="text-muted">{{ $cargo->cargo }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>

            <h2>Estudios</h2>

            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-10">Estudios </span>
                        <a href="/editEst/{{ $oferta->cod_oferta }}" style="color: white;" class="col-xs-2 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ol>
                        @foreach($oferta->estudio_oferta as $nivel)
                            <li class="text-muted">{{ $nivel->nivel_estudio }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>

            <h2>Habilidades</h2>

            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-10">Programas </span>
                        <a href="/editHab/{{ $oferta->cod_oferta }}" style="color: white;" class="col-xs-2 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ol>
                        @foreach($oferta->programas as $programa)
                            <li class="text-muted">{{ $programa->programa }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>

            <h2>Idiomas</h2>

            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-10">Idiomas </span>
                        <a href="/editOferta/{{ $oferta->cod_oferta }}/edit" style="color: white;" class="col-xs-2 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ol>
                        @foreach($oferta->idiomas as $idioma)
                            <li class="text-muted">{{ $idioma->idioma }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>

        </div>

    @endsection