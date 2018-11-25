@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')

        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Géneros</h2>
            <div style="margin-bottom: 1em">
                <a href="/genero/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>
            @foreach($generos as $genero)
                <div class="panel panel-primary mb-2 text- mb-3">
                    <div class="panel-heading py-1" >
                        <div class="row p-0">
                            <span class="col-xs-9">{{ $genero->genero }}</span>
                            <a href="/genero/{{ $genero->cod_genero }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                            {!!Form::open(['route'=>['genero.destroy',$genero->cod_genero],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            {!! $generos->render() !!}
        </div>


    @endsection