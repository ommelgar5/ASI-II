@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['idioma.store','method'=>'POST']])!!}

        <label class="text-muted">Idioma: </label>

        <input type="text" class="form-control" name="idioma"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/idioma"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection