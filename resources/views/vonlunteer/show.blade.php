@extends('layout.master')
@section('title', 'Volunteers')
@section('content')

    <h1>
        <a class="btn btn-info" href="{{route('vonlunteer.index')}}">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        </a> Voluntário {{$volunteer->name}}
    </h1>

    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$volunteer->name}}</td>
                <td>{{$volunteer->email}}</td>
                <td>{{$volunteer->phone}}</td>
            </tr>
        </tbody>
    </table>
@endsection 