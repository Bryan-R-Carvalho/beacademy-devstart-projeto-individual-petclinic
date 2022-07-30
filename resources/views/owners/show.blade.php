@extends("template.layout")
@section('title', 'Tutor ' .$owner->name)
@section('body')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Pets do {{$owner->name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/owners/create" class="btn btn-primary">Novo pet</a>
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
                        <th>Telefone</th>
                        <th>Rua</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection