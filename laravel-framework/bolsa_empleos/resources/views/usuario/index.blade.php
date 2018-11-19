@extends('layouts.adminUser')

    @section('content')
            <h2 class="text-center">Inforción personal</h2>
            <div class="container" style="max-width:700px">
                <div class="input-group">
                    <span class="input-group-addon mb-2" id="basic-addon1">DUI</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->id }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon mb-2" id="basic-addon1">DUI</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->dui }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->nombre }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Apellido</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->apellido }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->fech_nac }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Correo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->correo }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->telefono1  }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $persona->telefono2 ? $persona->telefono2 : '----' }}" disabled>
            </div> <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Genero</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $genero->genero }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Estado Civil</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $estadoCivil->estado  }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Años de experiencia</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $aExperiencia->a_experiecia }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Posee vehiculo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{$persona->vehiculo ? 'Si' : 'No'  }}" disabled>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Tipo de licencia:</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $licencia->tipo }}" disabled>
            </div><br>
            <a href="#" class="btn btn-primary">Editar</a>
                </div>

    @endsection