@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($giroEmpresa,['route'=>['giroEmpresa.update',$giroEmpresa->cod_giro],'method'=>'PUT'])!!}
        <label class="text-muted">Girro de la empresa: </label>

        <input  type="text" class="form-control" name="giro" value="{{ $giroEmpresa->giro}}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/giroEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection