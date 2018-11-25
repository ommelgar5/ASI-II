@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($programa,['route'=>['programa.update',$programa->cod_programa],'method'=>'PUT'])!!}
        <label class="text-muted">Programa: </label>

        <input  type="text" class="form-control" name="programa" value="{{ $programa->programa}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/programa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection