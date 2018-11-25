@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($idioma,['route'=>['idioma.update',$idioma->cod_idioma],'method'=>'PUT'])!!}
        <label class="text-muted">Idioma: </label>

        <input  type="text" class="form-control" name="idioma" value="{{ $idioma->idioma}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/idioma"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection