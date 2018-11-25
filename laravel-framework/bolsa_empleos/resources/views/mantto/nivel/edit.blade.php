@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($nivel,['route'=>['nivel.update',$nivel->cod_nivel],'method'=>'PUT'])!!}
        <label class="text-muted">Nivel: </label>

        <input  type="text" class="form-control" name="nivel" value="{{ $nivel->nivel}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/nivel"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection