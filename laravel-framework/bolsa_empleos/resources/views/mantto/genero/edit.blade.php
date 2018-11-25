@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($genero,['route'=>['genero.update',$genero->cod_genero],'method'=>'PUT'])!!}
        <label class="text-muted">Género: </label>

        <input  type="text" class="form-control" name="genero" value="{{ $genero->genero}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/genero"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection