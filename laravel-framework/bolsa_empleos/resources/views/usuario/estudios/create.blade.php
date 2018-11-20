
@extends('layouts.adminUser')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editEstudio.store','method'=>'POST']])!!}

    <label class="text-muted">Nivel estudio: </label>
    <select class="form-control" name="cod_nivel_est">
        <option value="">Seleccione una opción</option>
        @foreach($data['nivelEstudios'] as $nivelEstudio)
                <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
        @endforeach
    </select><br>

    <label class="text-muted"> Área de estudio: </label>
    <select class="form-control" name="cod_area_est">
        <option value="">Seleccione una opción</option>
        @foreach($data['areaEstudios'] as $areaEstudio)
                <option value="{{ $areaEstudio->cod_area_est }}">{{ $areaEstudio->area_est }}</option>
        @endforeach
    </select><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Especialidad:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="especialidad" >
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Nombre de la institución:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre_institucion"  >
    </div><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de inicio</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" name="a_inicio"  min="1970-01-01">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de finalización</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" id="a_fin" name="a_fin" min="1970-01-01">
    </div><br>

    <label class="text-muted"> Actual </label>
    <select class="form-control" name="actual" id="actual">
        <option value="">Seleccione una opción</option>
            <option value="1" >Si</option>
            <option value="0">No</option>
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5">Agregar</button>
        <a href="/editEstudio"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection