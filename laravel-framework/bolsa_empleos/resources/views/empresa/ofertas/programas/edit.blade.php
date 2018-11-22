
@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::model($programaOfer,['route'=>['editHabilidad.update',$programaOfer->cod_oferta_prog],'method'=>'PUT'])!!}

    <label class="text-muted">Programa: </label>
    <select class="form-control" name="cod_programa">
        @foreach($programas as $programa)
            @if($programaOfer->cod_programa == $programa->cod_programa)
                <option value="{{ $programa->cod_programa }}" selected>{{ $programa->programa }}</option>
            @else
                <option value="{{ $programa->cod_programa }}">{{ $programa->programa }}</option>
            @endif
        @endforeach
    </select><br>

    <label class="text-muted">Nivel: </label>
    <select class="form-control" name="cod_nivel">
    @foreach($niveles as $nivel)
        @if($programaOfer->cod_nivel == $nivel->cod_nivel)
            <option value="{{ $nivel->cod_nivel }}" selected>{{ $nivel->nivel }}</option>
        @else
            <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel }}</option>
        @endif
    @endforeach
    </select><br>
            <input type="number" hidden name="cod_oferta" value="{{ $programaOfer->cod_oferta }}">

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Actualizar</button>
        <a href="/editHab/{{ $programaOfer->cod_oferta_prog }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection