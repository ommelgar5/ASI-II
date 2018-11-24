@extends('layouts.adminGestor')

    @include('alerts.sucess')

    @section('content')

        <div class="container" style="max-width: 80%">
            <h2 class="text-muted">Areas empresas</h2>
            <div style="margin-bottom: 1em">
                <a href="/areaEmpresa/create" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Agregar</a>
            </div>
            @foreach($areasEmpresas as $areaEmpresa)
                <div class="panel panel-primary mb-2 text- mb-3">
                    <div class="panel-heading py-1" >
                        <div class="row p-0">
                            <span class="col-xs-9">{{ $areaEmpresa->area }}</span>
                            <a href="/areaEmpresa/{{ $areaEmpresa->cod_area }}/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                            {!!Form::open(['route'=>['areaEmpresa.destroy',$areaEmpresa->cod_area],'method'=>'DELETE','class'=>'text-center col-xs-2 p-0'])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm'])!!}
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            {!! $areasEmpresas->render() !!}
        </div>

    @endsection