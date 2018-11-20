
@extends('layouts.adminUser')

@section('content')

    @include('alerts.request')

    {!!Form::model($estudio,['route'=>['editEstudio.update',$estudio->cod_estudio],'method'=>'PUT'])!!}

    <label class="text-muted">Nivel estudio: </label>
    <select class="form-control" name="cod_nivel_est">
        @foreach($nivelEstudios as $nivelEstudio)
            @if($estudio->cod_nivel_est == $nivelEstudio->cod_nivel_est)
                <option value="{{ $nivelEstudio->cod_nivel_est }}" selected>{{ $nivelEstudio->nivel_estudio }}</option>
            @else
                <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
            @endif
        @endforeach
    </select><br>

    <label class="text-muted"> Área de estudio: </label>
    <select class="form-control" name="cod_area_est">
        @foreach($areaEstudios as $areaEstudio)
            @if($estudio->cod_area_est == $areaEstudio->cod_area_est)
                <option value="{{ $areaEstudio->cod_area_est }}" selected>{{ $areaEstudio->area_est }}</option>
            @else
                <option value="{{ $areaEstudio->cod_area_est }}">{{ $areaEstudio->area_est }}</option>
            @endif
        @endforeach
    </select><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Especialidad:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="especialidad" value="{{ $estudio->especialidad }}" >
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de la institución:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre_institucion" value="{{ $estudio->nombre_institucion }}" >
    </div><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de inicio</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" name="a_inicio" value="{{ $estudio->a_inicio }}" min="1970-01-01">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de finalización</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" id="a_fin" name="a_fin" value="{{ $estudio->a_fin }}" min="1970-01-01">
    </div><br>

    <label class="text-muted"> Actual </label>
    <select class="form-control" name="actual" id="actual">
        @if($estudio->actual == 1)
            <option value="1" selected>Si</option>
            <option value="0">No</option>
        @else
            <option value="0" selected>No</option>
            <option value="1">Si</option>
        @endif
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Actualizar</button>
        <a href="/editEstudio"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection