
@extends('layouts.adminUser')

    @section('content')

        @include('alerts.request')

        {!!Form::model($idiomaSolic,['route'=>['editIdioma.update',$idiomaSolic->cod_idioma_solic],'method'=>'PUT'])!!}

            <label class="text-muted"> Idioma: </label>
            <select class="form-control" name="cod_idioma">
                @foreach($idiomas as $idioma)
                    @if($idiomaSolic->cod_idioma == $idioma->cod_idioma)
                        <option value="{{ $idioma->cod_idioma }}" selected>{{ $idioma->idioma }}</option>
                    @else
                        <option value="{{ $idioma->cod_idioma }}">{{ $idioma->idioma }}</option>
                    @endif
                @endforeach
            </select><br>

            <label class="text-muted"> Nivel: </label>
            <select class="form-control" name="cod_nivel">
                @foreach($niveles as $nivel)
                    @if($idiomaSolic->cod_nivel == $nivel->cod_nivel)
                        <option value="{{ $nivel->cod_nivel }}" selected>{{ $nivel->nivel }}</option>
                    @else
                        <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel }}</option>
                    @endif
                @endforeach
            </select><br>

            <div class="text-center mb-5">
                <button class="btn btn-primary mr-5"> Actualizar</button>
                <a href="/editIdioma"  class="btn btn-default">Cancelar</a>
            </div>

        {!!Form::close()!!}


    @endsection