<!DOCTYPE html>
<!--[if IE 8]> <html lang="cn" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="cn" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @section('css')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="/vendor/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    @show

</head>
<!-- END HEAD -->

<body class="login">
<!-- BEGIN : LOGIN PAGE 5-1 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 bs-reset">
            <div class="login-bg" style="background-image:url(/images/login/bg1.jpg)">
                <img class="login-logo" src="/images/login/logo.png" />
            </div>
        </div>

        @yield ('content')

    </div>
</div>
<!-- END : LOGIN PAGE 5-1 -->

<!--[if lt IE 9]>
<script src="/assets/respond.min.js"></script>
<script src="/assets/excanvas.min.js"></script>
<![endif]-->

@section ('javascript')
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/jquery.min.js" type="text/javascript"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js.cookie.min.js" type="text/javascript"></script>
<script src="/vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/vendor/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/vendor/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/vendor/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
@show

</body>
</html>