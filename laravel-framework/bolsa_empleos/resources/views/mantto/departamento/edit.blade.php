@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($departamento,['route'=>['departamento.update',$departamento->cod_departamento],'method'=>'PUT'])!!}
        <label class="text-muted">Departamento: </label>

        <input  type="text" class="form-control" name="departamento" value="{{ $departamento->departamento}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/departamento"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection