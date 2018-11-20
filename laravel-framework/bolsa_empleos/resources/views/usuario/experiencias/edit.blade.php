
@extends('layouts.adminUser')

    @section('content')

        @include('alerts.request')

        {!!Form::model($experiencia,['route'=>['editExperiencia.update',$experiencia->cod_experiencia],'method'=>'PUT'])!!}

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Empresa:</span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="empresa" value="{{ $experiencia->empresa }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Puesto desempeñado: </span>
                <input type="text" class="form-control" aria-describedby="basic-addon1"  name="puesto" value="{{ $experiencia->puesto }}" >
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Descripcion: </span>
                <input type="text" class="form-control" aria-describedby="basic-addon1" name="descripcion" value="{{ $experiencia->descripcion }}">
            </div><br>

            <label class="text-muted"> Giro de la empresa: </label>
            <select class="form-control" name="cod_giro">
                @foreach($giroEmpresas as $giro)
                    @if($experiencia->cod_giro == $giro->cod_giro)
                        <option value="{{ $giro->cod_giro }}" selected>{{ $giro->giro }}</option>
                    @else
                        <option value="{{ $giro->cod_giro }}">{{ $giro->giro }}</option>
                    @endif
                @endforeach
            </select><br>

            <label class="text-muted"> Cargo desempeñado: </label>
            <select class="form-control" name="cod_cargo">
                @foreach($cargoEmpresas as $cargo)
                    @if($experiencia->cod_cargo == $cargo->cod_cargo)
                        <option value="{{ $cargo->cod_cargo }}" selected>{{ $cargo->cargo }}</option>
                    @else
                        <option value="{{ $cargo->cod_cargo }}">{{ $cargo->cargo}}</option>
                    @endif
                @endforeach
            </select><br>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de inicio</span>
                <input type="date" class="form-control" aria-describedby="basic-addon1" name="a_inicio" value="{{ $experiencia->a_inicio }}" min="1970-01-01">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Fecha de finalización</span>
                <input type="date" class="form-control" aria-describedby="basic-addon1" id="a_fin" name="a_fin" value="{{ $experiencia->a_fin }}" min="1970-01-01">
            </div><br>

            <label class="text-muted"> Actual </label>
            <select class="form-control" name="actual" id="actual">
                @if($experiencia->actual == 1)
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                @else
                    <option value="0" selected>No</option>
                    <option value="1">Si</option>
                @endif
            </select><br>

            <div class="text-center mb-5">
                <button class="btn btn-primary mr-5"> Actualizar</button>
                <a href="/editExperiencia"  class="btn btn-default">Cancelar</a>
            </div>

        {!!Form::close()!!}


    @endsection