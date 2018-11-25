@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['municipio.store','method'=>'POST']])!!}
        <br>
        <label class="text-muted">Municipio: </label>
        <div class="form-group">
            <input type="text" class="form-control" name="municipio"><br>
        </div>
        <label class="text-muted">Departamento: </label>
        <div class="form-group">
            <select class="form-control" name="cod_departamento">
                @foreach( $departamentos as $departamento)
                    <option value="{{ $departamento->cod_departamento }}"> {{ $departamento->departamento }} </option>
                @endforeach
            </select>
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/municipio"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection