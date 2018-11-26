@extends('layouts.adminGestor');


@section('content')

    <!-- Tabla -->
    <div class="col-lg-12" style="margin-top: 1em; ">
        <div class="panel panel-default">

            <div class="panel-heading">
                usuarios
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
                                    <th rowspan="1" colspan="1" style="width: 13%;">DUI</th>
                                    <th rowspan="1" colspan="1" style="width: 20%;">Nombres</th>
                                    <th rowspan="1" colspan="1" style="width: 20%">Apellidos</th>
                                    <th rowspan="1" colspan="1" style="width: 15%;">correo</th>
                                    <th rowspan="1" colspan="1" style="width: 10%;">Telefono 1</th>
                                    <th rowspan="1" colspan="1">Acciones</th>
                                </tr>
                                </thead>
                                <tbody style="font-size: .8em;">
                                @foreach( $usuarios as $usuario)
                                    <tr class="gradeA odd" role="row">
                                        <td>{{ $usuario->dui }}</td>
                                        <td>{{ $usuario->persona->nombre }}</td>
                                        <td>{{ $usuario->persona->apellido }}</td>
                                        <td>{{ $usuario->persona->correo }}</td>
                                        <td>{{ $usuario->persona->telefono1 }}</td>
                                        <td class="text-center">
                                            @if( $usuario->isActive == 1)
                                                <a href="/gestor/usuario/{{ $usuario->dui }}"><i class="fa fa-unlock fa-2x text-success" aria-hidden="true"></i></a>
                                            @else
                                                <a href="/gestor/usuario/{{ $usuario->dui }}"><i class="fa fa-lock fa-2x text-danger" aria-hidden="true"></i></a>
                                            @endif
                                            <a href="#" id="detUs"  class="btn btn-primary btn-xs" data-toggle="modal" data-target="#useModal" style="margin-left: 3em;"> Detalle</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="text-center">
                                {{--Mostrar la paginacion--}}
                                {!! $usuarios->render() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="data">

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="useModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="dataUse">

            </div>

        </div>
    </div>

@endsection