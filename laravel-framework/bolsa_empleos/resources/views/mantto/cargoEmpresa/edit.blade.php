@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($cargoEmpresa,['route'=>['cargoEmpresa.update',$cargoEmpresa->cod_cargo],'method'=>'PUT'])!!}

        <label class="text-muted">Cargo en la empresa: </label>
        <div class="form-group">
            <input type="text" class="form-control" name="cargo" value="{{ $cargoEmpresa->cargo }}"><br>
        </div>
        <label class="text-muted">Área de la empresa: </label>
        <div class="form-group">
            <select class="form-control" name="cod_area">
                @foreach( $areasEmpresas as $areaEmpresa)
                    @if( $cargoEmpresa->cod_area == $areaEmpresa->cod_area)
                        <option value="{{ $areaEmpresa->cod_area }}" selected> {{ $areaEmpresa->area }} </option>
                    @else
                        <option value="{{ $areaEmpresa->cod_area }}"> {{ $areaEmpresa->area }} </option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/cargoEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection