@extends('layouts.adminGestor')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>En este día</h3>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$usuarios_nuevos_dia}}</div>
                                <div>¡Nuevos Usuarios!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.usuarios.dia')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-building fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$empresas_nuevas_dia}}</div>
                                <div>!Nuevas Empresas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.empresas.dia')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-newspaper-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$ofertas_nuevas_dia}}</div>
                                <div>¡Nuevas Ofertas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.ofertas.dia')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- End content -->

        <div class="row">
            <div class="col-lg-12">
                <h3>En este mes</h3>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$usuarios_nuevos_mes}}</div>
                                <div>¡Nuevos Usuarios!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.usuarios.mes')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-building fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$empresas_nuevas_mes}}</div>
                                <div>!Nuevas Empresas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.empresas.mes')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-newspaper-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$ofertas_nuevas_mes}}</div>
                                <div>¡Nuevas Ofertas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.ofertas.mes')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- End content -->

        <div class="row">
            <div class="col-lg-12">
                <h3>Total</h3>
            </div>
        </div>

        <!-- /.row -->
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$usuarios_total}}</div>
                                <div>¡Usuarios!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.usuarios')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-building fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$empresas_total}}</div>
                                <div>!Nuevas Empresas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.empresas')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-newspaper-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$ofertas_total}}</div>
                                <div>¡Nuevas Ofertas!</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('gestor.ofertas')}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalle</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- End content -->

    @endsection