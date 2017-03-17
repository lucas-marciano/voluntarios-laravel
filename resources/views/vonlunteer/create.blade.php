@extends('layout.master')
@section('title', 'New Volunteers')
@section('content')
    <h1><a class="btn btn-info" href="{{route('vonlunteer.index')}}">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        </a>Novo voluntário</h1>
    <div>
        <form action="{{ route('vonlunteer.store') }}" method="POST">

            @include('vonlunteer.form')

        </form>
    </div>
@endsection 