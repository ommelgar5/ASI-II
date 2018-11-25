@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['giroEmpresa.store','method'=>'POST']])!!}

        <label class="text-muted">Giro empresa: </label>

        <input type="text" class="form-control" name="giro"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/giroEmpresa"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection