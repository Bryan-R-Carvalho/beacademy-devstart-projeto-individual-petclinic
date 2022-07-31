@extends("template.layout")
@section('title', 'Tutor ' .$owner->name)
@section('body')
<div class="container">
    <h1>Cadastro do {{$owner->name}}</h1>
    <a href="/owners/create" class="btn btn-primary">Novo pet</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Rua</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $owner->id }}</td>
                <td>{{ $owner->name }}</td>
                <td>{{ $owner->email }}</td>
                <td>{{ $owner->phone}}</td>
                <td>{{ $owner->street}}</td>
                <td>{{ $owner->city}}</td>
                <td>{{ $owner->state}}</td>
                <td>{{ $owner->postal_code}}</td>
                <td>
                    <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/owners" class="btn btn-primary">Voltar</a>
</div>
@endsection