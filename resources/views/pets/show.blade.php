@extends("template.layout")
@section('title', 'Pets do ' .$owner->name)
@section('body')
<div class="container">
    <h1>Pets do {{$owner->name}}</h1>
    <a href="{{ route('pets.create', $owner->id) }}" class="btn btn-primary">Novo pet</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Especie</th>
                <th>Raça</th>
                <th>Cor</th>
                <th>Pelagem</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->species }}</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->color }}</td>
                <td>{{ $pet->hair_type }}</td>
                <td>{{ $pet->gender}}</td>
                <td>{{ $pet->weight }}</td>
                <td>{{ $pet->age }}</td>
                <td>
                    <a href="{{ route('pets.edit', [$owner->id, $pet->id] ) }}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
</div>
@endsection