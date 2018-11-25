@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['tipoContrato.store','method'=>'POST']])!!}

        <label class="text-muted">Tipo de contrato: </label>

        <input type="text" class="form-control" name="contrato"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/tipoContrato"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection