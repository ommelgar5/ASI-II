@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($tipoContrato,['route'=>['tipoContrato.update',$tipoContrato->cod_contrato],'method'=>'PUT'])!!}
        <label class="text-muted">Tipo de contrato: </label>

        <input  type="text" class="form-control" name="contrato" value="{{ $tipoContrato->contrato}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/tipoContrato"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection