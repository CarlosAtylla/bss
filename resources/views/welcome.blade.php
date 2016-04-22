@extends('layouts.app')

@section('content')
<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">Bem vindo ao BSS</h1>
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row center">
                    <a href="{{ url('/admin/anuncios/create') }}" id="download-button"
                       class="btn-large waves-effect waves-light teal lighten-1">Criar anuncio
                    </a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ URL::asset('assets/background1.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>
@endsection
