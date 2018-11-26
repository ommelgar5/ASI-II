@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['cargoEmpresa.store','method'=>'POST']])!!}
        <br>
        <label class="text-muted">Cargo empresa: </label>
        <div class="form-group">
            <input type="text" class="form-control" name="cargo"><br>
        </div>
        <label class="text-muted">Departamento: </label>
        <div class="form-group">
            <select class="form-control" name="cod_area">
                @foreach( $areasEmpresas as $areaEmpresa)
                    <option value="{{ $areaEmpresa->cod_area }}"> {{ $areaEmpresa->area }} </option>
                @endforeach
            </select>
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/cargoEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection