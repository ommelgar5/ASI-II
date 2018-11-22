
@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::model($estudio,['route'=>['editEstudio.update',$estudio->cod_estudio_oferta],'method'=>'PUT'])!!}

    <label class="text-muted">Nivel de estudio: </label>
    <select class="form-control" name="cod_nivel_est">
        @foreach($nivelesEstudios as $nivelEstudio)
            @if($estudio->cod_nivel_est == $nivelEstudio->cod_nivel_est)
                <option value="{{ $nivelEstudio->cod_nivel_est }}" selected>{{ $nivelEstudio->nivel_estudio }}</option>
            @else
                <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
            @endif
        @endforeach
            <input type="number" hidden name="cod_oferta" value="{{ $estudio->cod_oferta }}">
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Actualizar</button>
        <a href="/editEst/{{ $estudio->cod_estudio_oferta }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection