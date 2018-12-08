@extends('layouts.adminGestor')

@section('content')

    @include('alerts.request')

    <h2 class="text-center text-muted">Editar infomación personal</h2>
    <div class="container" style="max-width: 80%">

        {!!Form::open(['route'=>['gestor.createPerf','method'=>'POST']])!!}
        @method('PUT')
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">DUI</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="dui">
        </div><br>  <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Contraseña</span>
            <input type="password" class="form-control" aria-describedby="basic-addon1" name="pass1"  >
        </div><br>  <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Repetir Contraseña</span>
            <input type="password" class="form-control" aria-describedby="basic-addon1" name="pass2" >
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre" >
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Apellido</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1"  name="apellido" >
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
            <input type="date" class="form-control" aria-describedby="basic-addon1" name="fech_nac" min="1950-01-01">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Correo</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1"  name="correo">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono1">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono2">
        </div> <br>

        <label class="text-muted"> Genero: </label>
        <select class="form-control" name="cod_genero">
            @foreach($generos as $genero)
                    <option value="{{ $genero->cod_genero }}">{{ $genero->genero }}</option>
            @endforeach
        </select><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Agregar</button>
            <a href="/gestor/dashboard"  class="btn btn-default">Cancelar</a>
        </div>
        {!! Form::close() !!}
    </div>

@endsection