@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['tipoLicencia.store','method'=>'POST']])!!}

        <label class="text-muted">Licencia: </label>

        <input type="text" class="form-control" name="tipo"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/tipoLicencia"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection