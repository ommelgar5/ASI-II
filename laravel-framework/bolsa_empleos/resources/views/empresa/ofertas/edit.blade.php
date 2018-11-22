@extends('layouts.adminEmpresa')

    @section('content')

        @include('alerts.request')

            <h2 class="text-center text-muted">Editar detalle oferta</h2>
            <div class="container" style="max-width: 80%">
                {!!Form::model($oferta,['route'=>['editDetalle.update',$oferta->cod_oferta],'method'=>'PUT'])!!}
                @method('PUT')
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Titulo</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="titulo" value="{{ $oferta->titulo }}" >
                </div><br>
                
                <div class="form-group">
                    <label>Descripción de la oferta</label>
                    <textarea class="form-control" rows="5" name="descripcion">{{ $oferta->descripcion }}</textarea>
                </div><br>

                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Numero plazas</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1"  name="numero_plaza" value="{{ $oferta->numero_plaza }}" >
                </div><br>

                 <label class="text-muted"> Tipo de contrato: </label>
                <select class="form-control" name="cod_contrato">
                    @foreach($tiposContratos as $contrato)
                        @if($oferta->cod_contrato == $contrato->cod_contrato)
                            <option value="{{ $contrato->cod_contrato }}" selected>{{ $contrato->contrato }}</option>
                        @else
                            <option value="{{ $contrato->cod_contrato }}">{{ $contrato->contrato }}</option>
                        @endif
                    @endforeach
                </select><br>

                 <label class="text-muted"> Años de experiencia: </label>
                <select class="form-control" name="cod_a_experiencia">
                    @foreach($aExperiencias as $aExperiencia)
                        @if($oferta->cod_a_experiencia == $aExperiencia->cod_a_experiencia)
                            <option value="{{ $aExperiencia->cod_a_experiencia }}" selected>{{ $aExperiencia->a_experiecia }}</option>
                        @else
                            <option value="{{ $aExperiencia->cod_a_experiencia }}">{{ $aExperiencia->a_experiecia }}</option>
                        @endif
                    @endforeach
                </select><br>

                <label class="text-muted"> Genero: </label>
                <select class="form-control" name="cod_genero">
                    @foreach($generos as $genero)
                        @if($oferta->cod_genero == $genero->cod_genero)
                            <option value="{{ $genero->cod_genero }}" selected>{{ $genero->genero }}</option>
                        @else
                            <option value="{{ $genero->cod_genero }}">{{ $genero->genero }}</option>
                        @endif
                    @endforeach
                </select><br>

                 <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Edad minina</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1"  name="edad_min" value="{{ $oferta->edad_min }}" >
                </div><br>

                 <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Edad maxima</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1"  name="edad_max" value="{{ $oferta->edad_max }}" >
                </div><br>

                 <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Salario minino</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1"  name="salario_min" value="{{ $oferta->salario_min }}" >
                </div><br>

                 <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Salario maximo</span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1"  name="salario_max" value="{{ $oferta->salario_max }}" >
                </div><br>

                <label class="text-muted"> ¿Posee Vehículo? </label>
                <select class="form-control" name="vehiculo">
                    @if($oferta->vihiculo == 1)
                        <option value="1" selected>Si</option>
                        <option value="0">No</option>
                    @else
                        <option value="0" selected>No</option>
                        <option value="1">Si</option>
                    @endif
                </select><br>

                <label class="text-muted"> Tipo de licencia: </label>
                <select class="form-control" name="cod_licencia">
                    @foreach($licencias as $licencia)
                        @if( $oferta->cod_licencia == $licencia->cod_licencia)
                            <option value="{{ $licencia->cod_licencia }}" selected>{{ $licencia->tipo }}</option>
                        @else
                            <option value="{{ $licencia->cod_licencia }}">{{ $licencia->tipo }}</option>
                        @endif
                    @endforeach
                </select><br>

                <div class="text-center mb-5">
                    <button class="btn btn-primary mr-5"> Actualizar</button>
                    <a href="/editOferta/{{ $oferta->cod_oferta}}/edit"  class="btn btn-default">Cancelar</a>
                </div>
                {!! Form::close() !!}
            </div>

    @endsection