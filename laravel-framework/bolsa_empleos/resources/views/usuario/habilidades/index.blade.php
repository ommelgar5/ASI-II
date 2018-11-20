@extends('layouts.adminUser')

@include('alerts.sucess')

@section('content')
    <div class="container" style="max-width: 80%">
        <h2 class="text-muted">Habilidades</h2>
        @foreach($data as $habilidad)
            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0">
                        <span class="col-xs-9">{{ $habilidad->programa->programa }} - {{ $habilidad->nivel->nivel }}</span>
                        <a href="/editHabilidad/{{ $habilidad->cod_progr_solic }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        {!!Form::open(['route'=>['editHabilidad.destroy',$habilidad->cod_progr_solic],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

@endsection