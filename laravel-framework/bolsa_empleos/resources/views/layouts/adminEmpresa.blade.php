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
    <style>
        pre{
            display:none;
        }
    </style>
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
                <a class="navbar-brand" href="#">Editar perfil empresa</a>
            </div>
           
            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::guard('empresa')->user()->nombre_comercial }}
                        <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                          <a href="/empresa/dashboard"><i class="fa fa-user fa-fw"></i> Regresar</a>
                        </li>
                
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/editPerfilEmpresa"><i class="fa fa-building fa-fw"></i> Perfil empresa</a>
                        </li>
                        
                        <li>
                            <a href="/editOferta"><i class="fa  fa-folder-open fa-fw"></i> Ofertas publicadas</a>
                        </li>

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

</body>
</html>