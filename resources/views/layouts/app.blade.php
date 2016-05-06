<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>BSS - Seu site de serviços</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/materialize.min.css') }}">
    <link href="{{ URL::asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ url('/') }}" class="brand-logo">BSS</a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Criar Conta</a></li>
            @else
                <li>
                    <a href="#" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
            @endif
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('content')

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">BSS</h5>
                <p class="grey-text text-lighten-4">Anuncie aqui seus serviços, contrate serviço</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Opções</h5>
                <ul>
                    <li><a class="white-text" href="#!">Contato</a></li>
                    <li><a class="white-text" href="#!">Empresa</a></li>
                    <li><a class="white-text" href="#!">Quem somos</a></li>
                    <li><a class="white-text" href="#!">Trabalhe conosco</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Destaques</h5>
                <ul>
                    <li><a class="white-text" href="#!">Técnico em Hardware</a></li>
                    <li><a class="white-text" href="#!">Eletricista</a></li>
                    <li><a class="white-text" href="#!">Bombeiro Hidraulico</a></li>
                    <li><a class="white-text" href="#!">Técnico em Celulares</a></li>
                    <li><a class="white-text" href="#!">Técnico Eletrônica</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        Estágio 2 -  Só Aqui você encontra os melhores preços e serviços do Brasil. Venha Conferir!
        </div>
    </div>
</footer>
|
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ URL::asset('assets/js/materialize.js') }}"></script>
<script src="{{ URL::asset('assets/js/init.js') }}"></script>

</body>
</html>





{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>BSS</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
{{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

{{--<!-- Styles -->--}}
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

{{--<style>--}}
{{--body {--}}
{{--font-family: 'Lato';--}}
{{--}--}}

{{--.fa-btn {--}}
{{--margin-right: 6px;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}
{{--<body id="app-layout">--}}
{{--<nav class="navbar navbar-default navbar-static-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}

{{--<!-- Collapsed Hamburger -->--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}

{{--<!-- Branding Image -->--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--BSS--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
{{--<li><a href="{{ url('/register') }}">Criar Conta</a></li>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}

{{--@yield('content')--}}

{{--<!-- JavaScripts -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
{{--</body>--}}
{{--</html>--}}
