@extends('layouts.adminUser')

    @include('alerts.sucess')

    @section('content')
        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Experiencias laborales</h2>
                @foreach($data as $experiencia)
                    <div class="panel panel-primary mb-2 text- mb-3">
                        <div class="panel-heading py-1" >
                            <div class="row">
                                <span class="col-xs-10">{{ $experiencia->puesto }} - {{ $experiencia->empresa }}</span>
                                <a href="/editExperiencia/{{ $experiencia->cod_experiencia }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                                <div class="col'xs'1">
                                    {!!Form::open(['route'=>['editExperiencia.destroy',$experiencia->cod_experiencia],'method'=>'DELETE'])!!}
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger display-inline'])!!}
                                    {!!Form::close()!!}
                                </div>
                            </div>
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