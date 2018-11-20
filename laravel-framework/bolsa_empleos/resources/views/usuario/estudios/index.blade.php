@extends('layouts.adminUser')

@include('alerts.sucess')

@section('content')
    <div class="container" style="max-width: 80%">
        <h2 class="text-muted">Estudios</h2>

        @foreach($data as $estudio)
            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0 m-0">
                        <span class="col-xs-9">{{ $estudio->especialidad }} - {{ $estudio->nombre_institucion }}</span>
                        <a href="/editEstudio/{{ $estudio->cod_estudio }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        {!!Form::open(['route'=>['editEstudio.destroy',$estudio->cod_estudio],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
                <div class="panel-body">
                    <div>Área de estudio: <span class="text-muted">{{ $estudio->area_estudio->area_est }}</span></div>
                    <div>Nivel estudio:  <span class="text-muted">{{ $estudio->nivel_estudio->nivel_estudio }}</span></div>
                    <span>Fecha inicio:</span> <span class="text-muted">{{ $estudio->a_inicio }}</span>
                    @if($estudio->a_fin)
                        <span>Fecha fin:</span> <span class="text-muted">{{ $estudio->a_fin }}</span>
                    @else
                        <span>Fecha fin:</span> <span class="text-muted"><span class="label label-primary ml-4">Actual</span></span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

@endsection