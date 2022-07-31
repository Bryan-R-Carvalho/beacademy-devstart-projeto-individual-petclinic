@extends("template.layout")
@section('title', 'Alterar tutor')
@section('body')
<div class="container w-50">
    <h1>Alterar tutor</h1>
    <form action="{{ route('owners.update', $owner->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $owner->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $owner->email }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $owner->phone}}">
        </div>
        <div class="form-group">
            <label for="street">Endereço</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ $owner->street}}">
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ $owner->city}}">
        </div>
        <div class="form-group">
            <label for="state">Estado</label>
            <input type="text" name="state" id="state" class="form-control" value="{{ $owner->state}}">
        </div>
        <div class="form-group">
            <label for="postal_code">CEP</label>
            <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ $owner->postal_code}}">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection