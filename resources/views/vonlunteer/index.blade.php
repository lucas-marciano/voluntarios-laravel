@extends('layout.master')
@section('title', 'Volunteers')
@section('content')
    <h1>Voluntários</h1>

    <p>
        <a class="btn btn-success" href="{{route('vonlunteer.create')}}">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo voluntário
        </a>
    </p>

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($vonlunteers as $volunteer)
            <tr>
                <td>{{$volunteer->id}}</td>
                <td><a title="{{$volunteer->name}}" href="{{route('vonlunteer.show', $volunteer->id)}}">{{$volunteer->name}}</a></td>
                <td>{{$volunteer->email}}</td>
                <td>{{$volunteer->phone}}</td>
                <td>
                    <a title="Editar" href="{{route('vonlunteer.edit', $volunteer->id)}}" class="btn btn-info">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <a title="Apagar" href="vonlunteer/{{ $volunteer->id }}" data-method="DELETE" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection 