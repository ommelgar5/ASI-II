@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')
        <div id="mensaje" style="position: absolute; z-index: 10;width: 80%; display: none" >
            <div class="alert alert-success text-center" role="alert">
                <Strong>¡Cargo empresa!</Strong> eliminado correctamente
            </div>
        </div>

        <div id="error" style="position: absolute; z-index: 10;width: 80%; display: none" >
            <div class="alert alert-danger text-center" role="alert">
                <Strong>¡Error!</Strong> al eliminar el cargo empresa :(
            </div>
        </div>


        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Cargos empresas: </h2>
            <div style="margin-bottom: 1em">
                <a href="/cargoEmpresa/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>

            <div class="form-group">
                <label for="departamento">Seleccione una área de la empresa:</label>
                <select class="form-control" id="area">
                    <option value="">Seleccione una opción</option>
                    @foreach( $areasEmpresas as $areaEmpresa)
                        <option value="{{ $areaEmpresa->cod_area }}"> {{ $areaEmpresa->area }} </option>
                    @endforeach
                </select>
            </div>

            <div class="cargosEmpresas" id="cargosEmpresas">


            </div>
        </div>

    @endsection