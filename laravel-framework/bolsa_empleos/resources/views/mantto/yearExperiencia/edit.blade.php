@extends('layouts.adminGestor')

    @section('content')

        @include('alerts.request')

        {!!Form::model($aExperiencia,['route'=>['aExperiencia.update',$aExperiencia->cod_a_experiencia],'method'=>'PUT'])!!}
        <label class="text-muted">Años de experiencia: </label>

        <input  type="text" class="form-control" name="a_experiecia" value="{{ $aExperiencia->a_experiecia }}"><br>

        <div class="text-center mb-5">
            <button class="btn btn-primary mr-5"> Actualizar</button>
            <a href="/aExperiencia"  class="btn btn-default">Cancelar</a>
        </div>

        {!!Form::close()!!}


    @endsection