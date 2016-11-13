<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    {{--elixir nos permitira usar la version actual de la carpeta build, esto eliminara detalles de cache--}}
    <link href="{{ config('settings.ASSETS_URL_PREFIX').elixir('/assets/css/app.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
{{--include lo usamos para elementos que se no cambiaran en el template--}}
@include("layouts.nav")

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        @yield('content')
    </div>
</div>

<div class="container">
    @yield('container')

    <footer>
        @include("layouts.footer")
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{ config('settings.ASSETS_URL_PREFIX').elixir('/assets/js/app.min.js') }}"></script>
</body>
</html>
