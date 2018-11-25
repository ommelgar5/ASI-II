@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['genero.store','method'=>'POST']])!!}

        <label class="text-muted">Género: </label>

        <input type="text" class="form-control" name="genero"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/genero"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection