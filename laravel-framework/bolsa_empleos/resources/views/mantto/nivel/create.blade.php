@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['nivel.store','method'=>'POST']])!!}

        <label class="text-muted">Nivel: </label>

        <input type="text" class="form-control" name="nivel"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/nivel"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection