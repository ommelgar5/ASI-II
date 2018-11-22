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
            <a class="navbar-brand" href="#">Editar perfil</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ App\persona::where('dui', Auth::user()->dui)->first()->nombre }} {{ App\persona::where('dui', Auth::user()->dui)->first()->apellido  }}
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/perfil"><i class="fa fa-user fa-fw"></i> Ver perfil</a>
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
                        <a href="/editPerfil"><i class="fa fa-user fa-fw"></i> Información personal</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-briefcase fa-fw"></i> Esperiencias profesionales<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/editExperiencia/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="/editExperiencia"><i class='fa fa-list-ol fa-fw'></i> Esperiencias</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Estudios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/editEstudio/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="/editEstudio"><i class='fa fa-list-ol fa-fw'></i> Estudios</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-male fa-fw"></i> Habilidades<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/editHabilidad/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="/editHabilidad"><i class='fa fa-list-ol fa-fw'></i> Habilidades</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-language fa-fw"></i> Idiomas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href=/editIdioma/create><i class='fa fa-plus fa-fw'></i> Agregar</a>
                            </li>
                            <li>
                                <a href="/editIdioma"><i class='fa fa-list-ol fa-fw'></i> Idiomas</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Cambiar Contraseña</a>
                    </li> -->

                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper" style="padding-top: 1em; padding-bottom: 2em">

        @yield('content')

    </div>

    </div>

    <script src="/assets/js/admin/jquery.min.js"></script>
    <script src="/assets/js/admin/bootstrap.min.js"></script>
    <script src="/assets/js/admin/metisMenu.min.js"></script>
    <script src="/assets/js/admin/sb-admin-2.js"></script>
    <script src="/assets/js/admin/personalizado.js"></script>


    </body>

</html>
