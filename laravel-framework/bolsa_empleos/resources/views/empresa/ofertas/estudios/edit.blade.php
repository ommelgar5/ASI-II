
@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::model($estudio,['route'=>['editEstudioEmp.update',$estudio->cod_estudio_oferta],'method'=>'PUT'])!!}

    </select><br> <label class="text-muted">Área de estudio: </label>
    <select class="form-control" name="cod_area_est">
        @foreach($areasEstudios as $areaEstudio)
            @if($estudio->cod_area_est == $areaEstudio->cod_area_est)
                <option value="{{ $areaEstudio->cod_area_est }}" selected>{{ $areaEstudio->area_est }}</option>
            @else
                <option value="{{ $areaEstudio->cod_area_est }}">{{ $areaEstudio->area_est }}</option>
            @endif
        @endforeach
    </select><br>

    <label class="text-muted">Nivel de estudio: </label>
    <select class="form-control" name="cod_nivel_est">
        @foreach($nivelesEstudios as $nivelEstudio)
            @if($estudio->cod_nivel_est == $nivelEstudio->cod_nivel_est)
                <option value="{{ $nivelEstudio->cod_nivel_est }}" selected>{{ $nivelEstudio->nivel_estudio }}</option>
            @else
                <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
            @endif
        @endforeach
    </select><br>

    <input type="number" hidden name="cod_oferta" value="{{ $estudio->cod_oferta }}">

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Actualizar</button>
        <a href="/editEst/{{ $estudio->cod_estudio_oferta }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection