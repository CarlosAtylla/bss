@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <h5>Adicionar anuncio</h5>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Descrição do serviço</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">categoria</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="preco" type="text" class="validate">
                        <label for="preco">Preco</label>
                    </div>
                </div>
                <button class="btn">Salvar</button>
            </form>
        </div>
    </div>


    {{--{!! Form::open(['url' => 'admin/posts', 'class' => 'form-horizontal']) !!}--}}

    {{--<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">--}}
    {{--{!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}--}}
    {{--<div class="col-sm-6">--}}
    {{--{!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}--}}
    {{--{!! $errors->first('title', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">--}}
    {{--{!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}--}}
    {{--<div class="col-sm-6">--}}
    {{--{!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}--}}
    {{--{!! $errors->first('body', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--<div class="form-group">--}}
    {{--<div class="col-sm-offset-3 col-sm-3">--}}
    {{--{!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection