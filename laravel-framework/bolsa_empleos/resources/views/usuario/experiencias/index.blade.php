@extends('layouts.adminUser')

    @section('content')
        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Experiencias laborales</h2>
                @foreach($data as $experiencia)
                        <div class="panel panel-primary mb-2 text- mb-3">
                            <div class="panel-heading py-1">
                                    {{ $experiencia->puesto }} - {{ $experiencia->empresa }}
                                <a href="/editExperiencia{{ $experiencia->cod_experiencia }}/edit"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a>

                            </div>
                                <div class="panel-body">
                                    <div>Giro de la empresa:  <span class="text-muted">{{ $experiencia->giro_empresa->giro }}</span></div>
                                    {{--<div>Cargo: <span class="text-muted">{{ $experiencia->cargo_empresa->cargo }}</span></div>--}}
                                    <div>Descripcion:</div>
                                    <p class="text-muted">{{  $experiencia->descripcion }}</p>
                                    <span>Fecha inicio:</span> <span class="text-muted">{{ $experiencia->a_inicio }}</span>
                                    @if($experiencia->a_fin)
                                        <span>Fecha fin:</span> <span class="text-muted">{{ $experiencia->a_fin }}</span>
                                    @else
                                        <span>Fecha fin:</span> <span class="text-muted"><span class="label label-primary ml-4">Actual</span></span>
                                    @endif
                                </div>
                            </div>
                @endforeach
            </div>
        </div>

    @endsection