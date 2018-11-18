<html class="loaded" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT"> -->
        <title>Login Page - Robust - Responsive Bootstrap 4 Admin Dashboard Template for Web Application</title>
        <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/icheck/custom.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-content-menu.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/login-register.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- END Custom CSS-->
    </head>
    <body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page  pace-done" data-open="click" data-menu="vertical-menu" data-col="1-column">
        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="flexbox-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-4 col-10 box-shadow-2 p-0">
                                <div class="card border-grey border-lighten-3 m-0">
                                    <div class="card-header border-0">
                                        <div class="card-title text-center">
                                            <div class="p-1">
                                                <img src="/assets/img/logos_st/logo.png" alt="branding logo">
                                            </div>
                                        </div>
                                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                            <span>Empresa</span>
                                        </h6>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form-horizontal form-simple error" method="POST" action="{{ route('empresa.login.submit') }}" novalidate="" autocomplete="off">
                                                @csrf
                                                <fieldset class="form-group position-relative has-icon-left mb-0 error">
                                                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg input-lg" id="correo" name="correo" type="email" placeholder="Correo" value="{{ old('email') }}" required="" autofocus aria-invalid="true">
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left error">
                                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg input-lg"  id="password" name="password" placeholder="Contraseña" required="" aria-invalid="true">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </fieldset>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-12 text-center text-md-left">
                                                        <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;">
                                                                <input type="checkbox" class="chk-remember" style="position: absolute; opacity: 0;" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div>
                                                            <label for="remember-me"> Recuerda me</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12 text-center text-md-right">
                                                        <a href="recover-password.html" class="card-link">Olvido contraseña?</a>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-info btn-lg btn-block">
                                                    <i class="ft-unlock"></i> Entrar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->

        <!-- BEGIN VENDOR JS-->
        <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="/app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="/app-assets/js/core/app.js" type="text/javascript"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>