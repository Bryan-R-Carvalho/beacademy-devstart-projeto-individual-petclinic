@extends("template.layout")
@section('title', 'Pets do ' .$owner->name)
@section('body')
<main>
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
                        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-warning">Editar</a>
                        <button type="button" data-toggle="modal" data-target="{{ '#JanelaModal'.$pet->id }}" class="btn btn-info">Detalhes</button>
                        <a href="{{ route('vaccinepet.show', $pet->id) }}" class="btn btn-primary">Vacinas</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </div>
        <section>
            @foreach($pets as $pet)
                <div class="modal fade" id="{{ 'JanelaModal'.$pet->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ '#JanelaModal'.$pet->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $pet->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $pet->details }}</p> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <a href="{{ route('pets.edit', [$owner->id, $pet->id] ) }}" class="btn btn-warning">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
</main>
@endsection