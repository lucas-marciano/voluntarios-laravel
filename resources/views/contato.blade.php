@extends('layout.master')
@section('title', 'Contato')
@section('content')
      <div>
        <h1>Entre em contato:</h1>
        <form action="{{ route('contato.send') }}" method="POST">
          
          {!! csrf_field() !!}
          
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="{{ old('nome') }}" name="nome" placeholder="Nome">
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="3">
              {{ old('mensagem') }}
            </textarea>
          </div>
          
          <button type="submit" class="btn btn-default">Enviar</button>
          
        </form>
      </div>
@endsection 