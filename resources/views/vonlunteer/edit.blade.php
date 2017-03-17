@extends('layout.master')
@section('title', 'Edit Volunteers')
@section('content')
    <h1><a class="btn btn-info" href="{{route('vonlunteer.index')}}">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        </a>Editar voluntário {{ $volunteer->name }}</h1>
    <div>
        <form action="{{ route('vonlunteer.update', $volunteer->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @include('vonlunteer.form')
        </form>
    </div>
@endsection 