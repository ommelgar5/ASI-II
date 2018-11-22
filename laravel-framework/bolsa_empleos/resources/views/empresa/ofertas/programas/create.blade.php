@extends('layouts.adminEmpresa')

@section('content')

    @include('alerts.request')

    {!!Form::open(['route'=>['editExperiencia.store','method'=>'POST']])!!}

    <label class="text-muted"> Experiencia: </label>
    <select class="form-control" name="cod_cargo">
        <option value="">Selecciona una opcion</option>
        @foreach($cargos as $cargo)
            <option value="{{ $cargo->cod_cargo }}">{{ $cargo->cargo }}</option>
        @endforeach
    </select><br>
    <input type="number" hidden name="cod_oferta" value="{{ $idOferta }}">

    <div class="text-center mb-5">
        <button class="btn btn-primary mr-5"> Agregar</button>
        <a href="/editExper/{{ $idOferta }}"  class="btn btn-default">Cancelar</a>
    </div>

    {!!Form::close()!!}


@endsection