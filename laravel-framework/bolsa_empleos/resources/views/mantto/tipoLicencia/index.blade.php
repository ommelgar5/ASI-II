@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')

        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Tipos de Licencias</h2>
            <div style="margin-bottom: 1em">
                <a href="/tipoLicencia/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>
            @foreach($tiposLicencias as $tipoLicencia)
                <div class="panel panel-primary mb-2 text- mb-3">
                    <div class="panel-heading py-1" >
                        <div class="row p-0">
                            <span class="col-xs-9">{{ $tipoLicencia->tipo }}</span>
                            <a href="/tipoLicencia/{{ $tipoLicencia->cod_licencia }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                            {!!Form::open(['route'=>['tipoLicencia.destroy',$tipoLicencia->cod_licencia],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            {!! $tiposLicencias->render() !!}
        </div>


    @endsection