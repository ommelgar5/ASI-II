@extends('layouts.adminUser')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editIdioma.store','method'=>'POST']])!!}

    <label class="text-muted"> Idioma: </label>
    <select class="form-control" name="cod_idioma">
        <option value="">Selecciona una opcion</option>
        @foreach($data['idiomas'] as $idioma)
                <option value="{{ $idioma->cod_idioma }}">{{ $idioma->idioma }}</option>
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