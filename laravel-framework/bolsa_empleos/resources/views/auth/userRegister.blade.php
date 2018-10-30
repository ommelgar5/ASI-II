

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection



<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Registro de Usuario</title>
    <link rel="apple-touch-icon" href="css/login_register/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="css/login_register/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/vendors/css/extensions/toastr.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/core/menu/menu-types/vertical-content-menu.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/plugins/pickers/daterange/daterange.css">
    <link rel="stylesheet" type="text/css" href="css/login_register/app-assets/css/plugins/extensions/toastr.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/login_register/assets/css/style.css">
    <!-- END Custom CSS-->
    </head>
    <body class="vertical-layout" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content">
            <div class="content-wrapper">
                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form id="formwizard" action="#" class="steps-validation wizard-circle">

                                            <!-- step 1 -->
                                            <h6>Creaci&oacute;n de usuario</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="DUI">
                                                                DUI :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required" id="DUI" name="DUI" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password">
                                                                Contrase&ntilde;a :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control required" id="password" name="password" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="confirmPassword">
                                                                Confirme contrase&ntilde;a :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control required" id="confirmPassword" name="confirmPassword" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Informacion Personal</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userName">
                                                                Nombres :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required" id="userName" name="userName" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userLastName">
                                                                Apellidos :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required" id="userLastName" name="userLastName" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="genero">
                                                                Genero :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="genero" name="genero">
                                                                <option value="">seleccione un genero</option>

                                                                @foreach($data['generos'] as $genero)
                                                                    <option value="{{ $genero->cod_genero }}">{{ $genero->genero }}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="estadoCivil">
                                                                Estado Civil :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="estadoCivil" name="estadoCivil">
                                                                <option value="">Seleccione un estado civil</option>
                                                                @foreach($data['estadoCivil'] as $estadoCivil)
                                                                    <option value="{{ $estadoCivil->cod_civil }}">{{ $estadoCivil->estado }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fechaNac">
                                                                Fecha de Nacimiento :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="date" class="form-control required" id="fechaNac" name="fechaNac" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userEmail">
                                                                Correo :
                                                            </label>
                                                            <input type="email" class="form-control" id="userEmail" name="userEmail">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="telFijo">Telefono Fijo :</label>
                                                            <input type="tel" class="form-control phone-group" id="telFijo" name="telFijo" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="telMovil">Telefono Movil :</label>
                                                            <input type="tel" class="form-control phone-group" id="telMovil" name="telMovil" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="departamento">
                                                                Departamento :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="departamento" name="departamento">
                                                                <option value="">Seleccione un departamento</option>
                                                                @foreach($data['departamentos'] as $departamento)
                                                                    <option value="{{ $departamento->cod_departamento }}">{{ $departamento->departamento }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="municipio">
                                                                Municipio :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="municipio" name="municipio">
                                                                <option value="">Seleccione un municipio</option>
                                                                @foreach($data['municipios'] as $municipio)
                                                                    <option value="{{ $municipio->cod_municipio }}">{{ $municipio->municipio }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="a_experiencia">
                                                                A&ntilde;os de experiencia :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="a_experiencia" name="a_experiencia">
                                                                <option value="">Seleccione una opci&oacute;n</option>
                                                                @foreach($data['a_experiencia'] as $experiencia)
                                                                    <option value="{{ $experiencia->cod_a_experiencia }}">{{ $experiencia->a_experiecia }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="licencia">
                                                                Licencia :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control" id="licencia" name="licencia">
                                                                <option value="">Seleccione una Licencia</option>
                                                                @foreach($data['licencias'] as $licencia)
                                                                    <option value="{{ $licencia->cod_licencia }}">{{ $licencia->tipo }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="vehiculo" id="vehiculo">
                                                            <label class="custom-control-label" for="vehiculo">Posee Vehiculo?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Estudios</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="form-control">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="areaEstudio">
                                                                        Area de Estudio :
                                                                        <span class="danger">*</span>
                                                                    </label>
                                                                    <select name="areaEstudio" id="areaEstudio" class="required custom-select form-control">
                                                                        <option value="">Seleccione un area</option>
                                                                        @foreach($data['areasEstudio'] as $areaEstudio)
                                                                            <option value="{{ $areaEstudio->cod_area_est }}">{{ $areaEstudio->area_est }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="nivelEstudio">
                                                                        Nivel de Estudio :
                                                                        <span class="danger">*</span>
                                                                    </label>
                                                                    <select id="nivelEstudio" name="nivelEstudio" class="required custom-select form-control">
                                                                        <option value="">Seleccione un nivel</option>
                                                                        @foreach($data['nivelesEstudio'] as $nivelEstudio)
                                                                            <option value="{{ $nivelEstudio->cod_nivel_est }}">{{ $nivelEstudio->nivel_estudio }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="nombreInstitucion">
                                                                    Nombre de la Instituci&oacute;n :
                                                                    <span class="danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control required" id="nombreInstitucion" name="nombreInstitucion" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="especialidadCarrera">
                                                                    Opci&oacute;n de la carrera :
                                                                    <span class="danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control required" id="especialidadCarrera" name="especialidadCarrera" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="fechaInicio">
                                                                        Fecha de inicio :
                                                                        <span class="danger">*</span>
                                                                    </label>
                                                                    <input type="date" class="form-control required" id="fechaInicio" name="fechaInicio" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="fechaFin">
                                                                        Fecha de finalizaci&oacute;n :
                                                                        <span class="danger">*</span>
                                                                    </label>
                                                                    <input type="date" class="form-control required" id="fechaFin" name="fechaFin" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="estudioActual">
                                                                        Actual :
                                                                        <span class="danger">*</span>
                                                                    </label>
                                                                    <select id="estudioActual" name="estudioActual" class="required custom-select form-control">
                                                                        <option value="">Seleccione una opcion</option>
                                                                        <option value="true">Si</option>
                                                                        <option value="false">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button type="button" id="agregarEstudio" class="btn btn-info buttonAnimation" data-animation="pulse">
                                                                    Agregar estudio
                                                                </button>
                                                                <button type="button" id="limpiarFormEstudio" class="btn">
                                                                    Cancelar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4> Mis Estudios</h4>
                                                        <ol class="misEstudios">
                                                            
                                                        </ol>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6>Idiomas</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="idioma">
                                                                Idioma :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="idioma" name="idioma">
                                                                <option value="">Seleccione un idioma</option>
                                                                @foreach($data['idiomas'] as $idioma)
                                                                    <option value="{{ $idioma->cod_idioma }}">{{ $idioma->idioma }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nivel">
                                                                Nivel :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="nivel" name="nivel">
                                                                <option value="">Seleccione un idioma</option>
                                                                @foreach($data['niveles'] as $nivel)
                                                                    <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-info agregarIdioma" > Agregar Idioma </button>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4>Mis Idiomas</h4>
                                                        <ol class="misIdiomas">
                                                        </ol>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 5 -->
                                            <h6>Programas</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="programa">
                                                                Programa :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="programa" name="programa">
                                                                <option value="">Seleccione un programa</option>
                                                                @foreach($data['programas'] as $programa)
                                                                    <option value="{{ $programa->cod_programa }}">{{ $programa->programa }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nivelP">
                                                                Nivel :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="nivelP" name="nivelP">
                                                                <option value="">Seleccione un idioma</option>
                                                                @foreach($data['niveles'] as $nivel)
                                                                    <option value="{{ $nivel->cod_nivel }}">{{ $nivel->nivel }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-info agregarPrograma" > Agregar Programa </button>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4>Mis Programas</h4>
                                                        <ol class="misProgramas">
                                                        </ol>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 6 -->
                                            <h6>Experiencia</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nombreEmpresa">
                                                                Nombre de la empresa :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required" id="nombreEmpresa" name="nombreEmpresa" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="grioEmpresa">
                                                                Giro de la empresa :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="grioEmpresa" name="grioEmpresa">
                                                                <option value="">Seleccione una opci&oacute;n</option>
                                                                @foreach($data['giros_empresa'] as $giro_empresa)
                                                                    <option value="{{ $giro_empresa->cod_giro }}">{{ $giro_empresa->giro }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="areaEmpresa">
                                                                Area de la empresa :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="areaEmpresa" name="areaEmpresa">
                                                                <option value="">Seleccione una opci&oacute;n</option>
                                                                @foreach($data['areas_empresa'] as $areas_empresa)
                                                                    <option value="{{ $areas_empresa->cod_area }}">{{ $areas_empresa->area }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cargoEmpresa">
                                                                Cargo desempe&ntilde;ado :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="cargoEmpresa" name="cargoEmpresa">
                                                                <option value="">Seleccione una opci&oacute;n</option>
                                                                @foreach($data['cargos_empresa'] as $cargo_empresa)
                                                                    <option value="{{ $cargo_empresa->cod_cargo }}">{{ $cargo_empresa->cargo }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fechaInicioEmpresa">
                                                                Fecha de inicio :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="date" class="form-control required" id="fechaInicioEmpresa" name="fechaInicioEmpresa" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fechaFinEmpresa">
                                                                Fecha de finalizaci&oacute;n :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="date" class="form-control required" id="fechaFinEmpresa" name="fechaFinEmpresa" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="actualEmpresa">
                                                                Actual :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control required" id="actualEmpresa" name="actualEmpresa">
                                                                <option value="">Seleccione una opci&oacute;n</option>
                                                                <option value="1">Si</option>
                                                                <option value="2">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descripcionPuesto">
                                                            Descripci&oacute;n del puesto :
                                                            <span class="danger">*</span>
                                                            </label>
                                                            <textarea class="form-control required" id="descripcionPuesto" name="descripcionPuesto"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-info agregarExperiencia">Agregar Experiencia </button>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ol class="misExperiencias">

                                                        </ol>
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->
            </div>
        </div>
        
        <!-- BEGIN VENDOR JS-->
        <script src="css/login_register/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script type="text/javascript" src="css/login_register/app-assets/vendors/js/ui/jquery.sticky.js"></script>
        <script type="text/javascript" src="css/login_register/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="css/login_register/app-assets/vendors/js/ui/headroom.min.js"></script>
        <script src="css/login_register/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/vendors/js/forms/validation/jquery.validate.additional-methods.min.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="css/login_register/app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/js/core/app.js" type="text/javascript"></script>
        <script src="css/login_register/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script type="text/javascript" src="css/login_register/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
        <script src="css/login_register/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->

        <script type="text/javascript">
            $(document).ready(function(){
                var dui, pass, id;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });

                $(document).on("click",".borrarEstudio, .quitarIdioma, .quitarPrograma, .quitarExperiencia",function(){
                    $(this).parent().parent().parent().remove();
                });

                // $(document).on("click",".quitarIdioma",function(){
                //     $(this).parent().parent().parent().remove();
                // });

                $(document).on('click','.agregarIdioma',function(event){
                    event.preventDefault();

                    $("#formwizard").validate().settings.ignore = ":disabled,:hidden";
                    
                    if($("#formwizard").valid())
                    {
                        var objIdioma = $("#idioma");
                        var objNivel = $("#nivel");

                        var idioma = objIdioma.val();
                        var nivel = objNivel.val();

                        var idiomaTxt = $('#idioma option[value="'+idioma+'"]').text();
                        var nivelTxt = $('#nivel option[value="'+nivel+'"]').text();

                        $('#idioma option[value="'+idioma+'"]').remove();
                        objNivel.val("");

                        var html = `<li>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" disabled value="${idiomaTxt}" />
                                    <input type="hidden" name="idiomas[]" value="${idioma}" />
                                </div>
                                <div class="col-md-5">
                                    <input type="text" disabled value="${nivelTxt}" />
                                    <input type="hidden" name="niveles[]" value="${nivel}" />
                                </div>
                                <div class="col-md-2">
                                    <i class="quitarIdioma fa fa-trash" style="cursor:pointer;"></i>
                                </div>
                            </div>
                        </li>`;

                        $(html).hide().appendTo('.misIdiomas').fadeIn(1000);
                    }

                });

                $(document).on('click','.agregarPrograma',function(event){
                    event.preventDefault();

                    $("#formwizard").validate().settings.ignore = ":disabled,:hidden";
                    
                    if($("#formwizard").valid())
                    {
                        var objPrograma = $("#programa");
                        var objNivel = $("#nivelP");

                        var programa = objPrograma.val();
                        var nivel = objNivel.val();

                        var programaTxt = $('#programa option[value="'+programa+'"]').text();
                        var nivelTxt = $('#nivelP option[value="'+nivel+'"]').text();

                        $('#programa option[value="'+programa+'"]').remove();
                        objPrograma.val("");

                        var html = `<li>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" disabled value="${programaTxt}" />
                                    <input type="hidden" name="programas[]" value="${programa}" />
                                </div>
                                <div class="col-md-5">
                                    <input type="text" disabled value="${nivelTxt}" />
                                    <input type="hidden" name="nivelesP[]" value="${nivel}" />
                                </div>
                                <div class="col-md-2">
                                    <i class="quitarPrograma fa fa-trash" style="cursor:pointer;"></i>
                                </div>
                            </div>
                        </li>`;

                        $(html).hide().appendTo('.misProgramas').fadeIn(1000);
                    }

                });

                $(document).on('click','.agregarExperiencia',function(event){
                    event.preventDefault();

                    $("#formwizard").validate().settings.ignore = ":disabled,:hidden";
                    if($("#formwizard").valid())
                    {
                        var objnombreEmpresa = $("#nombreEmpresa");
                        var objGiro= $("#grioEmpresa");
                        var objAreaEmpresa = $("#areaEmpresa");
                        var objCargoEmpresa = $("#cargoEmpresa");
                        var objDescripcionPuesto = $("#descripcionPuesto");
                        var objFechaInicioEmpresa = $("#fechaInicioEmpresa");
                        var objFechaFinEmpresa = $("#objFechaFinEmpresa");
                        var objActualEmpresa = $("#actualEmpresa");

                        var nombreEmpresa = objnombreEmpresa.val();
                        var giro = objGiro.val();
                        var giroTxt = $('#grioEmpresa option[value="'+giro+'"]').text();
                        var areaEmpresa = objAreaEmpresa.val();
                        var areaEmpresaTxt = $('#areaEmpresa option[value="'+areaEmpresa+'"]').text();
                        var cargoEmpresa = objCargoEmpresa.val();
                        var cargoEmpresaTxt = $('#cargoEmpresa option[value="'+cargoEmpresa+'"]').text();
                        var descriptionPuesto = objDescripcionPuesto.val();
                        var fechaInicioEmpresa = objFechaInicioEmpresa.val();
                        var fechaFinEmpresa = objFechaFinEmpresa.val();
                        var actualEmpresa = objActualEmpresa.val();
                        var actualEmpresaTxt = $('#actualEmpresa option[value="'+actualEmpresa+'"]').text();

                        objnombreEmpresa.val("");
                        objGiro.val("");
                        objAreaEmpresa.val("");
                        objCargoEmpresa.val("");
                        objDescripcionPuesto.val("");
                        objFechaInicioEmpresa.val("");
                        objFechaFinEmpresa.val("");
                        objActualEmpresa.val("");

                        var html = `
                        <li>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>
                                            Nombre de la empresa :
                                        </label>
                                        <input type="text" class="form-control" disabled value="${nombreEmpresa}" />
                                        <input type="hidden" name="nombresEmpresa[]" value="${nombreEmpresa}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Giro de la empresa :
                                        </label>
                                        <input type="text" disabled class="form-control" value="${giroTxt}" />
                                        <input type="hidden" name="girosEmpresa[]" value="${giro}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Area de la empresa :
                                        </label>
                                        <input type="text" class="form-control" disabled value="${areaEmpresaTxt}" />
                                        <input type="hidden" name="areasEmpresa[]" value="${areaEmpresa}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Cargo desempe&ntilde;ado :
                                        </label>
                                        <input type="text" class="form-control" disabled value="${cargoEmpresaTxt}" />
                                        <input type="hidden" name="cargosEmpresa[]" value="${cargoEmpresa}" />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>
                                            Fecha de inicio :
                                        </label>
                                        <input type="text" disabled class="form-control" name="fechasInicioEmpresa[]" value="${fechaInicioEmpresa}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Fecha de finalizaci&oacute;n :
                                        </label>
                                        <input type="text" disabled class="form-control" name="fechasFinEmpresa[]" value="${fechaFinEmpresa}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Actual :
                                        </label>
                                        <input type="text" class="form-control" disabled value="${actualEmpresaTxt}" />
                                        <input type="hidden" name="actualesEmpresa[]" value="${actualEmpresa}" />
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Descripci&oacute;n del puesto :
                                        </label>
                                        <textarea class="form-control"  disabled>${descriptionPuesto}</textarea>
                                        <input type="hidden" name="descripcionesPuesto[]" value="${descriptionPuesto}" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <i class="quitarExperiencia fa fa-trash" style="cursor:pointer;"></i>
                                </div>
                            </div>
                        </li>
                        `;

                        $(html).hide().appendTo(".misExperiencias").fadeIn(1000);
                    }
                });

                //Actualiza los municipios cuando se selecciona un departamento
                $(document).on("change","#departamento",function(event){
                    var departamento = $(this).val();
                    $.ajax({
                        method: "get",
                        url: "{{ url('/obtenerMunicipios') }}/"+departamento,
                    }).done(function( msg ) {
                        $("#municipio").html('<option value="0">Seleccione un municipio</option>');
                        $(msg).each(function(k,v){
                            var html = '<option value="'+v.cod_municipio+'">'+v.municipio+'</option>' ;
                            $(html).appendTo("#municipio");
                        })
                    });
                });

                $(document).on("click","#agregarEstudio",function(event){
                    event.preventDefault();
                    
                    $("#formwizard").validate().settings.ignore = ":disabled,:hidden";
                    if($("#formwizard").valid())
                    {
                        var objAreaEstudio = $("#areaEstudio");
                        var objNivelEstudio = $("#nivelEstudio");
                        var objNombreInstitucion = $("#nombreInstitucion");
                        var objEspecialidadCarrera = $("#especialidadCarrera");
                        var objFechaInicio = $("#fechaInicio");
                        var objFechaFin = $("#fechaFin");
                        var objEstudioActual = $("#estudioActual");

                        var areaEstudio = objAreaEstudio.val();
                        var areaEstudioTxt = $('#areaEstudio option[value="'+areaEstudio+'"]').text();
                        var nivelEstudio = objNivelEstudio.val();
                        var nivelEstudioTxt = $('#nivelEstudio option[value="'+nivelEstudio+'"]').text();
                        var nombreInstitucion = objNombreInstitucion.val();
                        var especialidadCarrera = objEspecialidadCarrera.val();
                        var fechaInicio = objFechaInicio.val();
                        var fechaFin = objFechaFin.val();
                        var estudioActual = objEstudioActual.val();
                        var estudioActualTxt = $('#estudioActual option[value="'+estudioActual+'"]').text();

                        var html  = '<li><div class="row"><div class="col-md-4"><div class="form-group"><label >Area de Estudio :</label><input type="hidden" name="miAreaEstudio[]" value="'+areaEstudio+'" /> <input type="text" disabled  class="form-control" value="'+areaEstudioTxt+'" /></div></div><div class="col-md-4"><div class="form-group"><label >Nivel de Estudio :</label><input type="hidden" name="miNivelEstudio[]" value="'+nivelEstudio+'" /> <input type="text" disabled class="form-control" value="'+nivelEstudioTxt+'" /></div></div><div class="col-md-4"><div class="form-group"><label >Nombre de la Instituci&oacute;n :</label><input type="text" readonly="true" name="miInstitucion[]" class="form-control"  value="'+nombreInstitucion+'" /></div></div></div><div class="row"><div class="col-md-3"><div class="form-group"><label >Opcion&oacute;n  de la carrera:</label><input type="text" readonly="true" name="miCarrera[]" class="form-control" value="'+especialidadCarrera+'" /></div></div><div class="col-md-3"><div class="form-group"><label >Fecha de inicio :</label><input type="text" readonly="true" class="form-control " id="miFechaInicio[]" name="miFechaInicio[]" value="'+fechaInicio+'" ></div></div><div class="col-md-3"><div class="form-group"><label >Fecha de finalizaci&oacute;n :</label><input type="text" readonly="true" class="form-control " id="miFechaFin[]" name="miFechaFin[]" value="'+fechaFin+'" /></div></div><div class="col-md-2"><div class="form-group"><label >Estudio actual:</label>  <input type="hidden" name="miEstudioActual[]" value="'+estudioActual+'" /> <input type="text" disabled class="form-control" value="'+estudioActualTxt+'" /></div></div><div class="col-md-1"><i class="borrarEstudio fa fa-trash" style="cursor:pointer"> </i></div></div></div></li>';

                        objAreaEstudio.val("");
                        objNivelEstudio.val("")
                        objNombreInstitucion.val("");
                        objEspecialidadCarrera.val("");
                        objFechaInicio.val("");
                        objFechaFin.val("");
                        objEstudioActual.val("");
                        
                        $(html).hide().appendTo(".misEstudios").fadeIn(1000);
                    }
                });

                // Inicilaiza el formulario paso a paso
                var form = $(".steps-validation").show();

                $(".steps-validation").steps({
                    headerTag: "h6",
                    bodyTag: "fieldset",
                    transitionEffect: "fade",
                    forceMoveForward: true,
                    titleTemplate: '<span class="step">#index#</span> #title#',
                    labels: {
                        finish: 'Terminar',
                        next: 'siguiente'
                    },
                    onStepChanging: function (event, currentIndex, newIndex)
                    {
                        var $out = false;
                        

                        form.validate().settings.ignore = ":disabled,:hidden";
                        if( form.valid() ){
                            if(currentIndex == 0){
                                dui = $("#DUI").val();
                                pass = $("#password").val();

                                $.ajax({
                                    type: 'post',
                                    url: '{{ url("/validarDUI")}}',
                                    async: false,
                                    // cache: false,
                                    // timeout: 30000,
                                    dataType: 'json',
                                    data:{
                                        'dui': dui, 
                                        'pass': pass 
                                    },
                                    success:function(response){
                                        if(response.error){
                                            toastr.error(response.errorMessage);
                                            $out = false;
                                        }else{
                                            $out = true;
                                        }
                                    },
                                    error: function(){
                                        $out = false;
                                    }
                                });
                            }

                            if(currentIndex == 1){
                                var nombres = $("#userName").val();
                                var apellidos = $("#userLastName").val();
                                var genero = $("#genero").val();
                                var estadoCivil = $("#estadoCivil").val();
                                var fechaNac = $("#fechaNac").val();
                                var userEmail = $("#userEmail").val();
                                var telFijo = $("#telFijo").val();
                                var telMovil = $("#telMovil").val();
                                var departamento = $("#departamento").val();
                                var municipio = $("#municipio").val();
                                var a_experiencia = $("#a_experiencia").val();
                                var licencia = $("#licencia").val();

                                dataF = {
                                    'nombres': nombres, 
                                    'apellidos': apellidos, 
                                    'genero': genero, 
                                    'estadoCivil': estadoCivil,
                                    'fechaNac': fechaNac,
                                    'userEmail': userEmail,
                                    'telFijo': telFijo,
                                    'telMovil': telMovil,
                                    'departamento': departamento,
                                    'municipio': municipio,
                                    'a_experiencia': a_experiencia,
                                    'licencia': licencia,
                                    'dui': dui,
                                    'pass': pass
                                };

                                $.ajax({
                                    type: 'post',
                                    url: '{{ url("/registrarUsuario")}}',
                                    async: false,
                                    // cache: false,
                                    // timeout: 30000,
                                    dataType: 'json',
                                    data:dataF,
                                    success:function(response){
                                        if(response.error){
                                            toastr.error(response.errorMessage);
                                            $out = false;
                                        }else{
                                            id = response.personaID;
                                            $out = true;
                                        }
                                    },
                                    error: function(){
                                        $out = false;
                                    }
                                });
                            }
                        }
                            
                        if(currentIndex == 2){
                            
                            my_form = document.createElement('FORM');
                            
                            $(".misEstudios input").each(function(k,v){
                                my_form.appendChild(v); 
                            });

                            var dataF = $(my_form).serialize();

                            $.ajax({
                                type: 'post',
                                url: '{{ url("/agregarEstudios/") }}/'+id,
                                async: false,
                                // cache: false,
                                // timeout: 30000,
                                dataType: 'json',
                                data:dataF,
                                success:function(response){
                                    if(response.error){
                                        toastr.error(response.errorMessage);
                                        $out = false;
                                    }else{
                                        $out = true;
                                    }
                                },
                                error: function(){
                                    $out = false;
                                }
                            });
                        }

                        if(currentIndex == 3){
                            my_form = document.createElement('Form');
                            $(".misIdiomas input").each(function(k,v){
                                my_form.appendChild(v);
                            });

                            var dataF = $(my_form).serialize();

                            $.ajax({
                                type: 'post',
                                url: '{{ url("/agregarIdiomas/") }}/'+id,
                                async: false,
                                // cache: false,
                                // timeout: 30000,
                                dataType: 'json',
                                data:dataF,
                                success:function(response){
                                    if(response.error){
                                        toastr.error(response.errorMessage);
                                        $out = false;
                                    }else{
                                        $out = true;
                                    }
                                },
                                error: function(){
                                    $out = false;
                                }
                            });

                        }

                        if(currentIndex == 4){
                            my_form = document.createElement('Form');
                            $(".misProgramas input").each(function(k,v){
                                my_form.appendChild(v);
                            });

                            var dataF = $(my_form).serialize();

                            $.ajax({
                                type: 'post',
                                url: '{{ url("/agregarProgramas/") }}/'+id,
                                async: false,
                                // cache: false,
                                // timeout: 30000,
                                dataType: 'json',
                                data:dataF,
                                success:function(response){
                                    if(response.error){
                                        toastr.error(response.errorMessage);
                                        $out = false;
                                    }else{
                                        $out = true;
                                    }
                                },
                                error: function(){
                                    $out = false;
                                }
                            });
                        }

                        // // Forbid next action on "Warning" step if the user is to young
                        // if (newIndex === 1 && Number($("#fechaNac").val()) < 18)
                        // {
                        //     return false;
                        // }
                        // // Needed in some cases if the user went back (clean up)
                        // if (currentIndex < newIndex)
                        // {
                        //     // To remove error styles
                        //     form.find(".body:eq(" + newIndex + ") label.error").remove();
                        //     form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                        // }
                        
                        if(currentIndex == 0 || currentIndex == 1){
                            if($out){
                                form.validate().settings.ignore = ":disabled,:hidden";
                                return form.valid();
                            }
                        }else{
                            return $out;
                        }
                            
                    },
                    onFinishing: function (event, currentIndex)
                    {
                        
                        // form.validate().settings.ignore = ":disabled";
                        // return form.valid();

                        if(currentIndex == 5){
                            my_form = document.createElement('Form');
                            $(".misExperiencias input").each(function(k,v){
                                my_form.appendChild(v);
                            });

                            var dataF = $(my_form).serialize();
                            debugger;
                            $.ajax({
                                type: 'post',
                                url: '{{ url("/agregarExperiencias/") }}/'+id,
                                async: false,
                                // cache: false,
                                // timeout: 30000,
                                dataType: 'json',
                                data:dataF,
                                success:function(response){
                                    if(response.error){
                                        toastr.error(response.errorMessage);
                                        $out = false;
                                    }else{
                                        $out = true;
                                        window.location.replace("{{ url('/') }}");
                                    }
                                },
                                error: function(){
                                    $out = false;
                                }
                            });

                        }
                        
                    },
                    onFinished: function (event, currentIndex)
                    {
                        
                        alert("Submitted!");
                    }
                });

                // Initialize validation
                $(".steps-validation").validate({
                    ignore: 'input[type=hidden]', // ignore hidden fields
                    errorClass: 'danger',
                    successClass: 'success',
                    highlight: function(element, errorClass) {
                        $(element).removeClass(errorClass);
                    },
                    unhighlight: function(element, errorClass) {
                        $(element).removeClass(errorClass);
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element);
                    },
                    rules: {
                        userName: "required",
                        userLastName: "required",
                        genero: "required",
                        estadoCivil: "required",
                        fechaNac: "required",
                        userEmail: {
                            email: true
                        },
                        departamento: "required",
                        municipio: "required",
                        a_experiencia: "required",
                        telFijo:{
                            require_from_group: [1, ".phone-group"]
                        },
                        telMovil:{
                            require_from_group: [1, ".phone-group"]
                        },
                        licencia: "required",

                        DUI: "required",
                        password: "required",
                        confirmPassword:{
                            equalTo: '#password'
                        }

                    },
                    messages:{
                        userName:{
                            required: "Su nombre es requerido."
                        },
                        userLastName:{
                            required: "Su apellido es requerido. "
                        },
                        genero: { 
                            required: "Seleccione una opción." 
                        },
                        estadoCivil:{
                            required: "Seleccione una opción."
                        },
                        fechaNac:{
                            required: "Ingrese su fecha de nacimiento."
                        },
                        userEmail:{
                            email: "Ingrese un correo valido."
                        },
                        departamento:{
                            required: "Seleccione un departamento."
                        },
                        municipio:{
                            required: "Seleccione un municipio."
                        },
                        a_experiencia:{
                            required: "Seleccione una Opción."
                        },
                        telFijo:{
                            require_from_group: "Ingrese al menos un telefono."
                        },
                        telMovil:{
                            require_from_group: "Ingrese al menos un telefono."
                        },
                        DUI: {
                            required: "Su DUI es requerido para ingresar al sistema."
                        },
                        password: {
                            required: "Ingrese una contraseña"
                        },
                        confirmPassword:{
                            required: "Ingrese nuevamente su contraseña",
                            equalTo: "Las contraseñas no son iguales"
                        },
                        licencia:{
                            required: "Seleccione una opción."
                        }
                    }
                });


                // Initialize plugins
                // ------------------------------

                // Date & Time Range
                $('.datetime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'DD/MM/YYYY h:mm A'
                    }
                });

            });
        </script>
    </body>
</html>
