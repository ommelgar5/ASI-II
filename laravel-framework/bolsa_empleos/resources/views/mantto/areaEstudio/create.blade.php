@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::open(['route'=>['areaEstudio.store','method'=>'POST']])!!}

        <label class="text-muted">Area Estudio: </label>

        <input type="text" class="form-control" name="area_est"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/areaEstudio"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection