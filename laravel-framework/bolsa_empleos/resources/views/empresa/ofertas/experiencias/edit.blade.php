
@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::model($experiencia,['route'=>['editExperiencia.update',$experiencia->id],'method'=>'PUT'])!!}

    <label class="text-muted">Experiencia requerida: </label>
    <select class="form-control" name="cod_cargo">
        @foreach($cargos as $cargo)
            @if($experiencia->cod_cargo == $cargo->cod_cargo)
                <option value="{{ $cargo->cod_cargo }}" selected>{{ $cargo->cargo }}</option>
            @else
                <option value="{{ $cargo->cod_cargo }}">{{ $cargo->cargo }}</option>
            @endif
        @endforeach
            <input type="number" hidden name="cod_oferta" value="{{ $experiencia->cod_oferta }}">
    </select><br>

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Actualizar</button>
        <a href="/editExper/{{ $experiencia->id }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection