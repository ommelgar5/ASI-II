@extends('layouts.adminUser')

    @include('alerts.sucess')

    @section('content')

            <h2 class="text-center text-muted">Inforción personal</h2>
            <div class="container" style="max-width: 80%">
            <div class="input-group">
                <span class="input-group-addon mb-2 lead" id="basic-addon1">DUI</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->dui }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->nombre }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Apellido</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->apellido }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->fech_nac }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Correo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->correo }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->telefono1  }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->telefono2 ? $persona->telefono2 : '----' }}" disabled style="cursor: pointer">
            </div> <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Genero</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->genero->genero }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Estado Civil</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->estadoCivil->estado  }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Años de experiencia</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->a_experiencia->a_experiecia }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Posee vehiculo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{$persona->vehiculo ? 'Si' : 'No'  }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Tipo de licencia:</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->licencia->tipo }}" disabled style="cursor: pointer">
            </div><br>
                <div>
                    {!!link_to_route('editPerfil.edit', $title = 'Editar', $parameters = $persona->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </div>

    @endsection