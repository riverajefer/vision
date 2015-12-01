<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html>
<head >
    <meta charset="UTF-8">
    <title> @section('title') @show </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- REQUIRED STYLES -->
    @include('includes/styles')
    <!-- REQUIRED JS SCRIPTS -->
    @include('includes/scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <meta name="csrf-token" content="<?php echo csrf_token() ?>"/>
</head>

<body>

<!-- Notificaiones  -->
@if (Session::has('message'))
    <script> notificacion( '<?php echo Session::get('message') ?>' ) </script>
@endif

 @yield('content')


</body>
</html>