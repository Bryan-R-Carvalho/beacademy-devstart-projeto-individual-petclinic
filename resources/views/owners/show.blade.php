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
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($owner->pets as $pet)
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->species }}</td>
                        <td>{{$pet->breed}}</td>
                        <td>{{$pet->color}}</td>
                        <td>{{$pet->gender}}</td>
                        <td>{{$pet->weight}}</td>
                        <td>{{$pet->age}}</td>

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