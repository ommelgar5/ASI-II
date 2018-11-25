@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['estadoCivil.store','method'=>'POST']])!!}

        <label class="text-muted">Estado Civil: </label>

        <input type="text" class="form-control" name="estado"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/estadoCivil"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection