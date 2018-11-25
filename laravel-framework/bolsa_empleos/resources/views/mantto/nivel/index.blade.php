@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')

        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Niveles</h2>
            <p class="text-muted">Los niveles aplican para los niveles de idomas y hablidades</p>
            <div style="margin-bottom: 1em">
                <a href="/nivel/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>
            @foreach($niveles as $nivel)
                <div class="panel panel-primary mb-2 text- mb-3">
                    <div class="panel-heading py-1" >
                        <div class="row p-0">
                            <span class="col-xs-9">{{ $nivel->nivel }}</span>
                            <a href="/nivel/{{ $nivel->cod_nivel }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                            {!!Form::open(['route'=>['nivel.destroy',$nivel->cod_nivel],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            {!! $niveles->render() !!}
        </div>


    @endsection