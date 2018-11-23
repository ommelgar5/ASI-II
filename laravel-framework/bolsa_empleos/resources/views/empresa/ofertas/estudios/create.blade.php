@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editEstudioEmp.store','method'=>'POST']])!!}

    <label class="text-muted"> Nivel estudio: </label>
    <select class="form-control" name="cod_nivel_est">
        <option value="">Selecciona una opcion</option>
        @foreach($nivelesEstudios as $nivelEstudio)
            <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
        @endforeach
    </select><br>
    <input type="number" hidden name="cod_oferta" value="{{ $idOferta }}">

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Agregar</button>
        <a href="/editEst/{{ $idOferta }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection