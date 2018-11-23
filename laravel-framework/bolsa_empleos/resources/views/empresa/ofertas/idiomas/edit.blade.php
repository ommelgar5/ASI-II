
@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::model($idiomaOfer,['route'=>['editIdiomaEmp.update',$idiomaOfer->cod_oferta_idioma],'method'=>'PUT'])!!}

        <label class="text-muted">Idioma: </label>
        <select class="form-control" name="cod_idioma">
            @foreach($idiomas as $idioma)
                @if($idiomaOfer->cod_idioma == $idioma->cod_programa)
                    <option value="{{ $idioma->cod_idioma }}" selected>{{ $pidioma->idioma }}</option>
                @else
                    <option value="{{ $idioma->cod_idioma }}">{{ $idioma->idioma }}</option>
                @endif
            @endforeach
        </select><br>

        <label class="text-muted">Nivel: </label>
        <select class="form-control" name="cod_nivel">
        @foreach($niveles as $nivel)
            @if($idiomaOfer->cod_nivel == $nivel->cod_nivel)
                <option value="{{ $nivel->cod_nivel }}" selected>{{ $nivel->nivel }}</option>
            @else
                <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel }}</option>
            @endif
        @endforeach
        </select><br>
        <input type="number" hidden name="cod_oferta" value="{{ $idiomaOfer->cod_oferta }}">

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/editIdi/{{ $idiomaOfer->cod_oferta }}"  class="btn btn-default">Cancelar</a>
        </div>

    {!!Form::close()!!}


@endsection