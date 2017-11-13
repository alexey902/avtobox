<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="нижнекамск автозапчасти дешево автобокс под заказ">
    <meta name="author" content="нижнекамск автозапчасти">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Styles -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <!--[if IE]>

    <![endif]-->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Avtobox') }}</title>
    <!--[if IE]>
    <link href="{{ asset('css/ie.css') }}" rel="stylesheet">

    <script type='text/javascript' src="{{ asset('js/html5shiv.js') }}"></script>

    <script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->




</head>
<body>



<div id="app">

    @yield('acontent')
</div>

<!-- Scripts -->

<script type='text/javascript' src="{{ asset('js/jQuery1_11_2.js') }}"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jQuery1_11_2.js') }}"><\/script>')</script>

<script src="{{ asset('js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

</body>
</html>

