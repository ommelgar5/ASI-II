@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['areaEmpresa.store','method'=>'POST']])!!}

        <label class="text-muted">Area empresa: </label>

        <input type="text" class="form-control" name="area"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/areaEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection