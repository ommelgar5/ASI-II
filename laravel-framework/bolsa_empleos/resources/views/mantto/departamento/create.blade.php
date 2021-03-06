@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['departamento.store','method'=>'POST']])!!}

        <label class="text-muted">Departamento: </label>

        <input type="text" class="form-control" name="departamento"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/departamento"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection