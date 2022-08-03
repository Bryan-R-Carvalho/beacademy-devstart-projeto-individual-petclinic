@extends("template.layout")
@section('title', 'Pet do ' .$owner->name)
@section('body')
<div class="container w-50">
    <h1>Cadastrar pet do {{$owner->name}} </h1>
    <form action="{{route('pets.update', $pet->id)}}" method="POST">
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$pet->name}}" required>
        </div>
        <div class="form-group">
            <label for="species">Espécie</label>
            <input type="text" name="species" id="species" class="form-control" value="{{$pet->species}}" required>
        </div>
        <div class="form-group">
            <label for="breed">Raça</label>
            <input type="text" name="breed" id="breed" class="form-control" value="{{$pet->breed}}" required>
        </div>
        <div class="form-group">
            <label for="color">Cor</label>
            <input type="text" name="color" id="color" class="form-control" value="{{$pet->color}}" >
        </div>
        <div class="form-group">
            <label for="hair_type">Pelagem</label>
            <input type="text" name="hair_type" id="hair_type" class="form-control" value="{{$pet->hair_type}}">
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="text" name="weight" id="weight" class="form-control" value="{{$pet->weight}}">
        </div>
        <div class="form-group">
            <label for="age">Idade</label>
            <input type="text" name="age" id="age" class="form-control" value="{{$pet->age}}">
        </div>

        <label for="gender">Sexo</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="">
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
        <a href="{{ route('pets.show', $owner->id) }}" class="btn btn-primary mt-2 mb-5">Voltar</a>
        <button type="submit" class="btn btn-success mt-2 mb-5">Cadastrar</button>
        
    </form>
</div>
@endsection