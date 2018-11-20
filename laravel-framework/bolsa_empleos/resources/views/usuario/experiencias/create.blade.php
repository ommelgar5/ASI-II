@extends('layouts.adminUser')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editExperiencia.store','method'=>'POST']])!!}

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Empresa:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="empresa" value="" >
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Puesto desempeñado: </span>
        <input type="text" class="form-control" aria-describedby="basic-addon1"  name="puesto" value="" >
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Descripcion: </span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="descripcion" value="">
    </div><br>

    <label class="text-muted"> Giro de la empresa: </label>
    <select class="form-control" name="cod_giro">
        <option value="">Selecciona una opcion</option>
        @foreach($data['giroEmpresas'] as $giro)
                <option value="{{ $giro->cod_giro }}">{{ $giro->giro }}</option>
        @endforeach
    </select><br>

    <label class="text-muted"> Cargo desempeñado: </label>
    <select class="form-control" name="cod_cargo">
        <option value="">Selecciona una opcion</option>
        @foreach($data['cargoEmpresas'] as $cargo)
            <option value="{{ $cargo->cod_cargo }}">{{ $cargo->cargo}}</option>
        @endforeach
    </select><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de inicio</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" name="a_inicio" value="" min="1970-01-01">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Fecha de finalización</span>
        <input type="date" class="form-control" aria-describedby="basic-addon1" id="a_fin" name="a_fin" value="" min="1970-01-01">
    </div><br>

    <label class="text-muted"> Actual </label>
    <select class="form-control" name="actual" id="actual">
            <option value="">Selecciona una opcion</option>
            <option value="1">Si</option>
            <option value="0">No</option>
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Agregar</button>
        <a href="/editExperiencia"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection