@extends('layouts.adminUser')

@include('alerts.sucess')

@section('content')
    <div class="container" style="max-width: 80%">
        <h2 class="text-muted">Idiomas</h2>
        @foreach($data as $idioma)
            <div class="panel panel-primary mb-2 text- mb-3">
                <div class="panel-heading py-1" >
                    <div class="row p-0">
                        <span class="col-xs-9">{{ $idioma->idioma->idioma }} - {{ $idioma->nivel->nivel }}</span>
                        <a href="/editIdioma/{{ $idioma->cod_idioma_solic }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                        {!!Form::open(['route'=>['editIdioma.destroy',$idioma->cod_idioma_solic],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

@endsection