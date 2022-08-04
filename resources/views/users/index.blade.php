@extends('template.layout')
@section('title', 'usuarios')
@section('body')
<main>
    <div class="container">
        <h1>Usuarios</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Administrador</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->is_admin ? 'Sim' : 'Não'  }}</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="{{ '#JanelaModal'.$user->id }}" class="btn btn-info">Alterar</button>
                            @if(Auth::user()->is_admin)
                                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <section>
        @foreach($users as $user)
            <div class="modal fade" id="{{ 'JanelaModal'.$user->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ '#JanelaModal'.$user->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $user->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('users.update', $user->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Administrador
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Salvar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</main>
@endsection