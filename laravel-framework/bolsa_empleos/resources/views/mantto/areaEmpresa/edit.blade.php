@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($area,['route'=>['areaEmpresa.update',$area->cod_area],'method'=>'PUT'])!!}
        <label class="text-muted">Area de la empresa: </label>

        <input  type="text" class="form-control" name="area" value="{{ $area->area }}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/areaEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection