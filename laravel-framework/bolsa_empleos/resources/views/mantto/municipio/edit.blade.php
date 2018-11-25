@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($municipio,['route'=>['municipio.update',$municipio->cod_municipio],'method'=>'PUT'])!!}
        <label class="text-muted">Departamento: </label>

        <label class="text-muted">Municipio: </label>
        <div class="form-group">
            <input type="text" class="form-control" name="municipio" value="{{ $municipio->municipio }}"><br>
        </div>
        <label class="text-muted">Departamento: </label>
        <div class="form-group">
            <select class="form-control" name="cod_departamento">
                @foreach( $departamentos as $departamento)
                    @if( $municipio->cod_departamento == $departamento->cod_departamento)
                        <option value="{{ $departamento->cod_departamento }}" selected> {{ $departamento->departamento }} </option>
                    @else
                        <option value="{{ $departamento->cod_departamento }}"> {{ $departamento->departamento }} </option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/municipio"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection