
@extends('layouts.adminUser')

    @section('content')
        @include('alerts.request')
        <h2 class="text-center text-muted">Editar infomación personal</h2>
        <div class="container" style="max-width: 80%">
        {!!Form::model($data['persona'],['route'=>['editPerfil.update',$data['persona']->id],'method'=>'PUT','files'=>true])!!}
            @method('PUT')
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div> <br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre" value="{{ $data['persona']->nombre }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Apellido</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="apellido" value="{{ $data['persona']->apellido }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
                <input type="date" class="form-control" aria-describedby="basic-addon1" name="fech_nac" value="{{ $data['persona']->fech_nac }}" min="1950-01-01">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Correo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="correo" value="{{ $data['persona']->correo }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono1" value="{{ $data['persona']->telefono1  }}">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono2" value="{{ $data['persona']->telefono2 }}">
            </div> <br>

            <label class="text-muted"> Genero: </label>
            <select class="form-control" name="cod_genero">
                @foreach($data['generos'] as $genero)
                    @if($data['persona']->cod_genero == $genero->cod_genero)
                        <option value="{{ $genero->cod_genero }}" selected>{{ $genero->genero }}</option>
                    @else
                        <option value="{{ $genero->cod_genero }}">{{ $genero->genero }}</option>
                    @endif
                @endforeach
            </select><br>

            <label class="text-muted"> Estado Civil: </label>
            <select class="form-control" name="cod_civil">
                @foreach($data['estadosCivil'] as $estadoCivil)
                    @if($data['persona']->cod_civil == $estadoCivil->cod_civil)
                        <option value="{{ $estadoCivil->cod_civil }}" selected>{{ $estadoCivil->estado }}</option>
                    @else
                        <option value="{{ $estadoCivil->cod_civil }}">{{ $estadoCivil->estado }}</option>
                    @endif
                @endforeach
            </select><br>

            <label class="text-muted"> Años de Experiencia: </label>
            <select class="form-control" name="cod_a_experiencia">
                @foreach($data['aExperiencias'] as $aExperiencia)
                    @if($data['persona']->cod_a_experiencia == $aExperiencia->cod_a_experiencia)
                        <option value="{{ $aExperiencia->cod_a_experiencia }}" selected>{{ $aExperiencia->a_experiecia }}</option>
                    @else
                        <option value="{{ $aExperiencia->cod_a_experiencia }}">{{ $aExperiencia->a_experiecia }}</option>
                    @endif
                @endforeach
            </select><br>

            <label class="text-muted"> ¿Posee Vehículo? </label>
            <select class="form-control" name="vehiculo">
                @if($data['persona']->vihiculo == 1)
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                @else
                    <option value="0" selected>No</option>
                    <option value="1">Si</option>
                @endif
            </select><br>

            <label class="text-muted"> Años de Experiencia: </label>
            <select class="form-control" name="cod_licencia">
                @foreach($data['licencias'] as $licencia)
                    @if( $data['persona']->cod_licencia == $licencia->cod_licencia)
                        <option value="{{ $licencia->cod_licencia }}" selected>{{ $licencia->tipo }}</option>
                    @else
                        <option value="{{ $licencia->cod_licencia }}">{{ $licencia->tipo }}</option>
                    @endif
                @endforeach
            </select><br>

            <div class="text-center mb-5">
                <button class="btn btn-primary mr-5"> Actualizar</button>
                <a href="/editPerfil"  class="btn btn-default">Cancelar</a>
            </div>
            {!! Form::close() !!}
        </div>

    @endsection