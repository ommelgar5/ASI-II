
@extends('layouts.adminEmpresa')

@include('alerts.sucess')

@section('content')
    <div class="container" style="max-width: 80%">
        <h2 class="text-muted">Estudios</h2>
        <div style="margin-bottom: 1em">
            <a href="/editEst/create/{{ $idOferta }}" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
        </div>
        @foreach($estudios as $estudio)
            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0">
                        <span class="col-xs-9">{{ $estudio->nivel_estudio->nivel_estudio }}</span>
                        <a href="/editEstudio/{{ $estudio->cod_estudio_oferta }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        {!!Form::open(['route'=>['editEstudio.destroy',$estudio->cod_estudio_oferta],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection