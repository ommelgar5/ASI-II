@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')
        <div id="mensaje" style="position: absolute; z-index: 10;width: 80%; display: none" >
            <div class="alert alert-success text-center" role="alert">
                <Strong>¡Municio!</Strong> eliminado correctamente
            </div>
        </div>

        <div id="error" style="position: absolute; z-index: 10;width: 80%; display: none" >
            <div class="alert alert-danger text-center" role="alert">
                <Strong>¡Error!</Strong> al eliminar el minicipio :(
            </div>
        </div>


        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Municipios</h2>
            <div style="margin-bottom: 1em">
                <a href="/municipio/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>

            <div class="form-group">
                <label for="departamento">Seleccione un departamento</label>
                <select class="form-control" id="departamento">
                    <option value="">Seleccione una opción</option>
                    @foreach( $departamentos as $departamento)
                        <option value="{{ $departamento->cod_departamento }}"> {{ $departamento->departamento }} </option>
                    @endforeach
                </select>
            </div>

            <div class="municipios" id="municipios">


            </div>
        </div>

    @endsection