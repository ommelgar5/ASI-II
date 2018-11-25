@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($estadoCivil,['route'=>['estadoCivil.update',$estadoCivil->cod_civil],'method'=>'PUT'])!!}
        <label class="text-muted"> Estado civil: </label>

        <input  type="text" class="form-control" name="estado" value="{{ $estadoCivil->estado }}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/estadoCivil"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection