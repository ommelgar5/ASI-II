
@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        <h2 class="text-center text-muted">Editar infomación personal</h2>
        <div class="container" style="max-width: 80%">
        {{--{!!Form::model($gestor,['route'=>['editPerfil.update',$gestor->dui],'method'=>'PUT'])!!}--}}
        {!!Form::model($gestor,['route'=>['gestor.updatePerfil'],'method'=>'PUT'])!!}
            @method('PUT')
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre" value="{{ $gestor->nombre }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Apellido</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="apellido" value="{{ $gestor->apellido }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
                <input type="date" class="form-control" aria-describedby="basic-addon1" name="fech_nac" value="{{ $gestor->fech_nac }}" min="1950-01-01">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Correo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="correo" value="{{ $gestor->correo }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono1" value="{{ $gestor->telefono1  }}">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono2" value="{{ $gestor->telefono2 }}">
            </div> <br>

            <label class="text-muted"> Genero: </label>
            <select class="form-control" name="cod_genero">
                @foreach($generos as $genero)
                    @if($gestor->cod_genero == $genero->cod_genero)
                        <option value="{{ $genero->cod_genero }}" selected>{{ $genero->genero }}</option>
                    @else
                        <option value="{{ $genero->cod_genero }}">{{ $genero->genero }}</option>
                    @endif
                @endforeach
            </select><br>

            <div class="text-center mb-5">
                <button class="btn btn-primary mr-5"> Actualizar</button>
                <a href="/gestor/perfil"  class="btn btn-default">Cancelar</a>
            </div>
            {!! Form::close() !!}
        </div>

    @endsection