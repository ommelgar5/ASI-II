@extends('layouts.adminGestor')

@include('alerts.sucess')

@section('content')

    <h2 class="text-center text-muted">Inforción personal</h2>
    <div class="container" style="max-width: 80%">
        <div class="input-group">
            <span class="input-group-addon mb-2 lead" id="basic-addon1">DUI</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->dui }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->nombre }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Apellido</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->apellido }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Fecha de nacimiento</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->fech_nac }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Correo</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->correo }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->telefono1  }}" disabled style="cursor: pointer">
        </div><br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->telefono2 ? $gestor->telefono2 : '---- ----' }}" disabled style="cursor: pointer">
        </div> <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Genero</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $gestor->genero->genero }}" disabled style="cursor: pointer">
        </div><br>

        <div>
            {!!link_to_route('gestor.editPerfil', $title = 'Editar',null, $attributes = ['class'=>'btn btn-primary'])!!}
        </div>

@endsection