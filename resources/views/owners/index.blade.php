@extends("template.layout")
@section('title', 'Tutores')
@section('body')
<div class="container">
    <h1>Tutores</h1>
    <a href="{{route('owners.create')}}" class="btn btn-primary">Novo tutor</a>
    <table class="table table-striped">
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
                        <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-info">Detalhes</a>
                        
                        <a href="{{ route('pets.show', $owner->id) }}" class="btn btn-primary">Pets</a>
                    </td>
                </tr>
             @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center m-5">
        {{ $owners->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection