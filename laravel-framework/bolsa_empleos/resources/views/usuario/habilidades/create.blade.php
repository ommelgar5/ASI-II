@extends('layouts.adminUser')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editHabilidad.store','method'=>'POST']])!!}

    <label class="text-muted"> Programa: </label>
    <select class="form-control" name="cod_programa">
        <option value="">Selecciona una opcion</option>
        @foreach($data['programas'] as $programa)
                <option value="{{ $programa->cod_programa }}">{{ $programa->programa }}</option>
        @endforeach
    </select><br>

    <label class="text-muted"> Cargo desempeñado: </label>
    <select class="form-control" name="cod_nivel">
        <option value="">Selecciona una opcion</option>
        @foreach($data['niveles'] as $nivel)
            <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel}}</option>
        @endforeach
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Agregar</button>
        <a href="/editExperiencia"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection