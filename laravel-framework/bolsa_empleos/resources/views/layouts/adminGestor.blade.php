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
        pre{display: none;}
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
            <a class="navbar-brand" href="/gestor/dashboard">Administración Bolsa de Empleo</a>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Admistrador
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/gestor/perfil"><i class="fa fa-user fa-fw"></i> Ver perfil</a>
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
                        <a href="/gestor/empresas"><i class="fa fa-building fa-fw"></i>Empresas</a>
                    </li>

                    <li>
                        <a href="/gestor/usuarios"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="/gestor/createPerfil"><i class="fa fa-user fa-fw"></i> Agregar Usuario Administrador</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-fw"></i> Mantto tablas catalogos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/areaEmpresa"><i class="fa fa-check-square fa-fw"></i> Áreas empresa</a>
                            </li>
                            <li>
                                <a href="/areaEstudio"><i class='fa fa-check-square fa-fw'></i> Áreas estudio</a>
                            </li>
                            <li>
                                <a href="/aExperiencia"><i class='fa fa-check-square fa-fw'></i> Años de experiencia</a>
                            </li>
                            <li>
                                <a href="/departamento"><i class='fa fa-check-square fa-fw'></i> Departamentos</a>
                            </li>
                            <li>
                                <a href="/estadoCivil"><i class='fa fa-check-square fa-fw'></i> Estado civil</a>
                            </li>
                            <li>
                                <a href="/genero"><i class='fa fa-check-square fa-fw'></i>Genero </a>
                            </li>
                            <li>
                                <a href="/giroEmpresa"><i class='fa fa-check-square fa-fw'></i> Giro de la empresa</a>
                            </li>
                            <li>
                                <a href="/idioma"><i class='fa fa-check-square fa-fw'></i> Idiomas</a>
                            </li>
                            <li>
                                <a href="/tipoLicencia"><i class='fa fa-check-square fa-fw'></i> Tipos de licencia</a>
                            </li>
                            <li>
                                <a href="/municipio"><i class='fa fa-check-square fa-fw'></i> Municipios</a>
                            </li>
                            <li>
                                <a href="/nivel"><i class='fa fa-check-square fa-fw'></i> Niveles</a>
                            </li>
                            <li>
                                <a href="/programa"><i class='fa fa-check-square fa-fw'></i> Programas</a>
                            </li>
                            <li>
                                <a href="/tipoContrato"><i class='fa fa-check-square fa-fw'></i> Tipo de contrato </a>
                            </li>
                            <li>
                                <a href="/cargoEmpresa"><i class='fa fa-check-square fa-fw'></i> Cargos empresas </a>
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

{{--Mostrar detalle--}}
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        // Detalle Empresa
        $(document).on( 'click','#detalle', function () {

            var nit = this.parentElement.parentElement.children[0].textContent;

            $.ajax({
                type: 'post',
                url: '{{ url("gestor/empDet") }}/'+nit,
                async: false,
                success:function(response){

                    console.log(response);
                    var data = "";
                    if(!response.error){
                        data += `
                            <div class="modal-header bg-success">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> ${response.data.nombre_juridico}</h4>
                            </div>
                            <div class="modal-body">
                                  <div class="mb-2">Nombre comercial: <span class="text-muted">${response.data.nombre_comercial}</span></div>
                                  <div>Giro: <span class="text-muted">${response.data.giro_empresa.giro}</span></div>
                                  <div>Descripcion de la empresa:</div>
                                  <p class="text-muted">${response.data.descripcion }</p>
                                  <div>Correo: <span class="text-muted">${response.data.correo }</span></div>
                                  <div>Telefono 1: <span class="text-muted">${response.data.telefono1 }</span></div>
                                  <div>Telefono2: <span class="text-muted">${response.data.telefono2}</span></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            </div>
                        `;
                    }else{

                        data += `
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-white">No existe el registro :(</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            </div>
                        `;

                    }

                    $('#data').empty().append(data);

                },
                error: function(response){
                    console.log(response);
                }
            });

        });


        // Detalle ususario

        $(document).on( 'click','#detUs', function () {

            var dui = this.parentElement.parentElement.children[0].textContent;

            $.ajax({
                type: 'post',
                url: '{{ url("gestor/useDet") }}/'+dui,
                async: false,
                success:function(response){

                    console.log(response);
                    var data = "";
                    if(!response.error){
                        data += `
                            <div class="modal-header bg-success">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> ${response.data.nombre} ${response.data.apellido}</h4>
                            </div>
                            <div class="modal-body">
                                  <div class="mb-2">DUI: <span class="text-muted">${response.data.dui}</span></div>
                                  <div>Correo: <span class="text-muted">${response.data.correo}</span></div>
                                  <div>Fecha Nacimiento: <span class="text-muted">${response.data.fech_nac }</span></div>
                                  <div>Telefono 1: <span class="text-muted">${response.data.telefono1 }</span></div>
                                  <div>Telefono 2: <span class="text-muted">${response.data.telefono2}</span></div>
                                  <div>Genero: <span class="text-muted">${response.data.genero.genero}</span></div>
                                  <div>Estado civil: <span class="text-muted">${response.data.estado_civil.estado}</span></div>
                                  <div>Años de experiencia: <span class="text-muted">${response.data.a_experiencia.a_experiencia}</span></div>
                                  <div>Vehículo: <span class="text-muted">${ response.vehiculo ? 'Si' : 'No' }</span></div>
                                  <div>Licencia: <span class="text-muted">${response.data.licencia.tipo }</span></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            </div>
                        `;
                    }else{

                        data += `
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-white">No existe el registro :(</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                            </div>
                        `;

                    }

                    $('#dataUse').empty().append(data);

                },
                error: function(response){
                    console.log(response);
                }
            });

        });

//        Buscar los municipios por el departamento seleccionado

        $(document).on("change","#departamento",function(event){
            var departamento = $(this).val();
            var html = "";
            if(departamento) {
                $.ajax({
                    method: "get",
                    url: "{{ url('/obtenerMunicipios') }}/" + departamento,
                }).done(function (msg) {
                    $('#municipios').empty();
                    for(var municipio of msg){
                        html += `
                                <div class="panel panel-primary mb-2 text- mb-3">
                                    <div class="panel-heading py-1" >
                                        <div class="row p-0">
                                            <span class="col-xs-9">${ municipio.municipio }</span>
                                            <a href="/municipio/${ municipio.cod_municipio }/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                                            <input type="text" hidden value="${municipio.cod_municipio}" id="delete">
                                            <button class="btn btn-danger" id="delete">Eliminar</button>
                                        </div>
                                    </div>
                                </div>`;
                    }
                    $(html).appendTo('#municipios');
                })
            };
            });


            //        Delete Municipio
        $(document).on( 'click','#delete', function (event) {
            var elMun = this;
            var mun = (this.previousElementSibling.value);

            $.ajax({
                type: 'post',
                url: '{{ url("deleteMunicipio") }}',
                async: false,
                dataType: 'json',
                data:{
                    'municipio': mun
                },
                success:function(response){
                    if(!response.error){
                       $(elMun).parent().parent().parent().fadeOut(1000);
                       $('#mensaje').fadeIn(1000);
                       setInterval(function () {
                           $('#mensaje').fadeOut(1000);
                       },3000);
                    }
                },
                error: function(response){
                    $('#error').fadeIn(1000);
                    setInterval(function () {
                        $('#error').fadeOut(1000);
                    },3000)
                }
            });

        });





        //        Buscar los cargos por el area seleccionada

        $(document).on("change","#area",function(event){
            var area = $(this).val();
            var html = "";
            if(area) {
                $.ajax({
                    method: "get",
                    url: "{{ url('/obtenerCargos') }}/" + area,
                }).done(function (msg) {
                    $('#cargosEmpresas').empty();
                    for(var cargo of msg){
                        html += `
                                <div class="panel panel-primary mb-2 text- mb-3">
                                    <div class="panel-heading py-1" >
                                        <div class="row p-0">
                                            <span class="col-xs-9">${ cargo.cargo }</span>
                                            <a href="/cargoEmpresa/${ cargo.cod_cargo }/edit" style="color: white;" class="col-xs-1 text-center"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                                            <input type="text" hidden value="${cargo.cod_cargo}">
                                            <button class="btn btn-danger" id="deleteCargo">Eliminar</button>
                                        </div>
                                    </div>
                                </div>`;
                    }
                    $(html).appendTo('#cargosEmpresas');
                })
            };
        });


        //        Delete cargo
        $(document).on( 'click','#deleteCargo', function (event) {
            var elCargo = this;
            var cargo = (this.previousElementSibling.value);

            $.ajax({
                type: 'post',
                url: '{{ url("deleteCargoEmpresa") }}',
                async: false,
                dataType: 'json',
                data:{
                    'cod_cargo': cargo
                },
                success:function(response){
                    if(!response.error){
                        $(elCargo).parent().parent().parent().fadeOut(1000);
                        $('#mensaje').fadeIn(1000);
                        setInterval(function () {
                            $('#mensaje').fadeOut(1000);
                        },3000);
                    }
                },
                error: function(response){
                    $('#error').fadeIn(1000);
                    setInterval(function () {
                        $('#error').fadeOut(1000);
                    },3000)
                }
            });

        })






    });
</script>






</body>

</html>


