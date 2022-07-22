@extends("template.layout")
@section('title', 'Tutores')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tutores</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/owners/create" class="btn btn-primary">Novo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($owners as $owner)
                    <tr>
                        <td>{{ $owner->id }}</td>
                        <td>{{$owner->name}}</td>
                        <td>{{$owner->email}}</td>
                        <td>
                            <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-info">Detalhes</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection