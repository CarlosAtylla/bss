@extends('layouts.app')

        <!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Listagem de usuários</div>
                    <div class="panel-body">
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- */$x=0;/* --}}
                                @foreach($users as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('admin/users/' . $item->id . '/edit') }}">
                                                <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                            </a> /
                                            {{--{!! Form::open([--}}
                                                {{--'method'=>'DELETE',--}}
                                                {{--'url' => ['admin/users', $item->id],--}}
                                                {{--'style' => 'display:inline'--}}
                                            {{--]) !!}--}}
                                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}--}}
                                            {{--{!! Form::close() !!}--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination"> {!! $users->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
