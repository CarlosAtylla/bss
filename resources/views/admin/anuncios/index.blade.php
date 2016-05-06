@extends('layouts.app')

        <!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Listagem de anuncios</div>
                    <div class="panel-body">
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- */$x=0;/* --}}
                                @foreach($posts as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td>
                                        <td>{{ $item->descricao }}</td>
                                        <td>{{ $item->categoria }}</td>
                                        <td>{{ $item->preco }}</td>
                                        <td>
                                            <a href="{{ url('admin/users/' . $item->id . '/edit') }}">
                                                <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                            </a>                                         </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination"> {!! $posts->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
