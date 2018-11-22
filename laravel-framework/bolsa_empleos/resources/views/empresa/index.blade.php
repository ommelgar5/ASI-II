@extends('layouts.adminEmpresa')

    @include('alerts.sucess')

    @section('content')
            <h2 class="text-center text-muted">Inforción Empresa</h2>
            <div class="container" style="max-width: 80%">
            <div class="input-group">
                <span class="input-group-addon mb-2 lead" id="basic-addon1">NIT</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->nit }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre Juridico</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->nombre_juridico }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre comercial</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->nombre_comercial }}" disabled style="cursor: pointer">
            </div><br>
            <div class="form-group">
                <label>Descripción de la empresa</label>
                <textarea class="form-control" rows="5" disabled style="cursor: pointer">{{ $empresa->descripcion }}</textarea>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Correo</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->correo }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->telefono1  }}" disabled style="cursor: pointer">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->telefono2 ? $empresa->telefono2 : '---- ----' }}" disabled style="cursor: pointer">
            </div> <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Giro empresa</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" value="{{ $empresa->giro_empresa->giro }}" disabled style="cursor: pointer">
            </div><br>
            <div>
                {!!link_to_route('editPerfilEmpresa.edit', $title = 'Editar', $parameters = $empresa->nit, $attributes = ['class'=>'btn btn-primary'])!!}
            </div>

    @endsection