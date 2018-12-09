@extends('layouts.adminGestor')


@section('content')
 <!-- Tabla -->
<div class="col-lg-12" style="margin-top: 1em; ">
    <div style="margin-bottom: 1em">
        <a href="{{route('gestorCrearEmpresa')}}" class="btn btn-primary"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"></i> Crear Perfil</a>
    </div>
    <div class="panel panel-default">

        <div class="panel-heading">
            Ofertas
        </div>

        <!-- /.panel-heading -->
        <div class="panel-body">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">

                        <table width="100%"
                               class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline table-responsive"
                               style="width: 100%;">
                            <thead>
                            <tr role="row">
                                <th rowspan="1" colspan="1" style="width: 10%;"></th>
                                <th rowspan="1" colspan="1" style="width: 10%;">Empresa</th>
                                <th rowspan="1" colspan="1" style="width: 20%;">Titulo</th>
                                <th rowspan="1" colspan="1" style="width: 20%">Descripcion</th>
                                <th rowspan="1" colspan="1" style="width: 15%;">Vacantes</th>
                                <th rowspan="1" colspan="1" style="width: 10%;">Aplicaciones</th>
                                <th rowspan="1" colspan="1" style="width: 15%;">Acciones</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: .8em;">
                            @foreach( $ofertas as $oferta)
                                <tr class="gradeA odd" role="row">
                                    <td>
                                        @if($oferta->empresa->logo)
                                            <img style="max-width: 100px" class="rounded-circle " src="/storage/public/empresas_logo/{{$oferta->empresa->logo}}" />
                                        @else
                                            <img style="max-width: 100px" class="rounded-circle " src="/storage/public/empresas_logo/empresa.png" />
                                        @endif   
                                    </td>
                                    <td>{{ $oferta->empresa->nombre_comercial }}</td>
                                    <td>{{ $oferta->titulo }}</td>
                                    <td>{{ $oferta->descripcion }}</td>
                                    <td>{{ $oferta->numero_plaza }}</td>
                                    <td>{{ $oferta->aplicaciones->count() }}</td>
                                    <td class="text-center">
                                        @if( $oferta->isActive == 1)
                                            <a href="/gestor/ofertaActivar/{{$oferta->cod_oferta}}"><i class="fa fa-unlock fa-2x text-success" aria-hidden="true"></i></a>
                                        @else
                                            <a href="/gestor/ofertaActivar/{{ $oferta->cod_oferta }}"><i class="fa fa-lock fa-2x text-danger" aria-hidden="true"></i></a>
                                        @endif
                                            <a href="{{route('gestor.oferta', ['id' => $oferta->cod_oferta])}}" id="detalle"  class="btn btn-primary btn-xs" style="margin-left: 3em;"> Detalle</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="text-center">
                            {{--Mostrar la paginacion--}}
                            {!! $ofertas->render() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection