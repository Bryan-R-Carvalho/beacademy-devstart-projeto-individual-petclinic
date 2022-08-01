@extends("template.layout")
@section('title', 'Cadastra pet')
@section('body')
<div class="container w-50">
    <h1>Cadastrar pet do {{$owner->name}} </h1>
    <form action="{{route('pets.store', $owner->id)}}" method="POST">
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
            <input type="text" name="color" id="color" class="form-control" >
        </div>
        <div class="form-group">
            <label for="hair_type">Pelagem</label>
            <input type="text" name="hair_type" id="hair_type" class="form-control" >
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="text" name="weight" id="weight" class="form-control" >
        </div>
        <div class="form-group">
            <label for="age">Idade</label>
            <input type="text" name="age" id="age" class="form-control" >
        </div>

        <label for="gender">Sexo</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="" checked>
            <label class="form-check-label" for="gender">--</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="macho" >
            <label class="form-check-label" for="gender">Macho</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="femea">
            <label class="form-check-label" for="gender">Femea</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mt-2 mb-5">Cadastrar</button>
    </form>
</div>
@endsection