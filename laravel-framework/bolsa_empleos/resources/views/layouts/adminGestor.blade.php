<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración</title>

    <link href="/assets/css/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/admin/css/metisMenu.min.css" rel="stylesheet">
    <link href="/assets/css/admin/css/sb-admin-2.css" rel="stylesheet">
    <link href="/assets/css/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/gestor/dashboard">Administración Bolsa de Empleo</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Admistrador
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Ver perfil</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/gestor/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-building fa-fw"></i>Empresas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-list-ol fa-fw'></i> Empresa</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i> Mantto tablas catalogos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-check-square fa-fw"></i> Áreas empresa</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Áreas estudio</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Años de experiencia</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Departamentos</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Estado civil</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i>Genero </a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Giro de la empresa</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Idiomas</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Tipos de licencia</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Municipios</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Niveles</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Programas</a>
                            </li>
                            <li>
                                <a href="#"><i class='fa fa-check-square fa-fw'></i> Tipo de contrato </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <!-- Start content -->
    <div id="page-wrapper">

        @yield('content')

    </div>

</div>

<script src="/assets/js/admin/jquery.min.js"></script>
<script src="/assets/js/admin/bootstrap.min.js"></script>
<script src="/assets/js/admin/metisMenu.min.js"></script>
<script src="/assets/js/admin/sb-admin-2.js"></script>

</body>

</html>


