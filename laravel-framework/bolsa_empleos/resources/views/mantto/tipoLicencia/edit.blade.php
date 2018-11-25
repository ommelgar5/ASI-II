@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($tipoLicencia,['route'=>['tipoLicencia.update',$tipoLicencia->cod_licencia],'method'=>'PUT'])!!}
        <label class="text-muted">Tipo de Lincencia: </label>

        <input  type="text" class="form-control" name="tipo" value="{{ $tipoLicencia->tipo}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/tipoLicencia"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection