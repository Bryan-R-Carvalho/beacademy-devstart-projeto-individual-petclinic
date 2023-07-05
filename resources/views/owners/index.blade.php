@extends("template.layout")
@section('title', 'Tutores')
@section('body')
<main>
    <div class="container">
        <h1>Tutores</h1>
        <div class="row py-3">
            <a href="{{route('owners.create')}}" class="btn btn-primary">Novo tutor</a>
            <form id="search" action="{{ route('owners.index') }}" method="GET" class="form-inline">
                <input type="text" class=" form-control" name="search" placeholder="Buscar por nome">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>
        </div> 
        
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($owners as $owner)
                    <tr>
                        <td>{{ $owner->id }}</td>
                        <td>{{$owner->name}}</td>
                        <td>{{$owner->email}}</td>
                        <td>
                            <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-warning">Editar</a>
                            <button type="button" data-toggle="modal" data-target="{{ '#JanelaModal'.$owner->id }}" class="btn btn-info">Detalhes</button>
                            <a href="{{ route('pets.show', $owner->id) }}" class="btn btn-primary">Pets</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{ $owners->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <section>
        @foreach($owners as $owner)
            <div class="modal fade" id="{{ 'JanelaModal'.$owner->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ '#JanelaModal'.$owner->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $owner->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>
                                    <strong>Nome:</strong> {{ $owner->name }}
                                </li>
                                <li>
                                    <strong>Email:</strong> {{ $owner->email }}
                                </li>
                                <li>
                                    <strong>Telefone:</strong> {{ $owner->phone }}
                                </li>
                                <li>
                                    <strong>Rua:</strong> {{ $owner->street }}
                                </li>
                                <li>
                                    <strong>Cidade:</strong> {{ $owner->city }}
                                </li>
                                <li>
                                    <strong>Estado:</strong> {{ $owner->state }}
                                </li>
                                <li>
                                    <strong>CEP:</strong> {{ $owner->postal_code }}
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-warning">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</main>
@endsection