{!! csrf_field() !!}

<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" value="{{ isset($volunteer) ? $volunteer->name : old('name') }}" name="name"
           placeholder="Nome">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="{{ isset($volunteer) ? $volunteer->email : old('email') }}"
           name="email" placeholder="Email">
</div>

<div class="form-group">
    <label for="mensagem">Telefone</label>
    <input type="text" class="form-control" name="phone"
           value="{{ isset($volunteer) ? $volunteer->phone : old('phone') }}"/>
</div>

<button type="submit" class="btn btn-success">Salvar</button>
