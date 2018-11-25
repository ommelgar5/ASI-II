@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['aExperiencia.store','method'=>'POST']])!!}

        <label class="text-muted">Años de experiencia: </label>

        <input type="text" class="form-control" name="a_experiecia"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/aExperiencia"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection