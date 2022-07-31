@extends("template.layout")
@section('title', 'Cadastra pet')
@section('body')
<div class="container w-50">
    <h1>Cadastrar pet</h1>
    <form action="{{route('pets.store')}}" method="POST">
    @method('POST')
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="species">Espécie</label>
            <input type="text" name="species" id="species" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="breed">Raça</label>
            <input type="text" name="breed" id="breed" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="color">Cor</label>
            <input type="text" name="color" id="color" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hair_type">Pelagem</label>
            <input type="text" name="hair_type" id="hair_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hair_type">Pelagem</label>
            <input type="text" name="hair_type" id="hair_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="text" name="weight" id="weight" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Idade</label>
            <input type="text" name="age" id="age" class="form-control" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="macho" id="macho" value="macho" checked>
            <label class="form-check-label" for="macho">Macho</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="femea" id="femea" value="femea">
            <label class="form-check-label" for="femea">Femea</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="nulo" id="nulo" value="" disabled>
            <label class="form-check-label" for="nulo">----</label>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection