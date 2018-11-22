
@extends('layouts.adminEmpresa')

    @section('content')

        @include('alerts.request')

        <h2 class="text-center text-muted">Editar infomación empresa</h2>
        <div class="container" style="max-width: 80%">
        {!!Form::model($empresa,['route'=>['editPerfilEmpresa.update',$empresa->nit],'method'=>'PUT'])!!}
            @method('PUT')
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre juridico</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="nombre_juridico" value="{{ $empresa->nombre_juridico }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Nombre comercial</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="nombre_comercial" value="{{ $empresa->nombre_comercial }}" >
            </div><br>
            <div class="form-group">
                    <label>Descripción de la empresa</label>
                    <textarea class="form-control" rows="5" name="descripcion">{{ $empresa->descripcion }}</textarea>
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Corro</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="correo" value="{{ $empresa->correo }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 1</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono1" value="{{ $empresa->telefono1  }}">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefono 2</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="telefono2" value="{{ $empresa->telefono2 }}">
            </div> <br>

            <label class="text-muted"> Giro: </label>
            <select class="form-control" name="cod_giro">
                @foreach($girosEmpresas as $giro)
                    @if($empresa->cod_giro == $giro->cod_giro)
                        <option value="{{ $giro->cod_giro }}" selected>{{ $giro->giro }}</option>
                    @else
                        <option value="{{ $giro->cod_giro }}">{{ $giro->giro }}</option>
                    @endif
                @endforeach
            </select><br>
            <div class="text-center mb-5">
                <button class="btn btn-primary mr-5"> Actualizar</button>
                <a href="/editPerfilEmpresa"  class="btn btn-default">Cancelar</a>
            </div>
                
            {!! Form::close() !!}
        </div>

    @endsection