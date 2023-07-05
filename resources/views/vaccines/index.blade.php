@extends('template.layout')
@section('title', 'Vacinas')
@section('body')
<div class="container">
    <h1>Vacinas</h1>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        </div>
    @endif
    
    <div class="row py-3">
        <a href="{{route('vaccines.create')}}" class="btn btn-primary">Cadastrar vacina</a>
        <form id="search" action="{{ route('vaccines.index') }}" method="GET" class="form-inline">
            <input type="text" class=" form-control" name="search" placeholder="Buscar por nome">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </form>
    </div> 
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vaccines as $vaccine)
                <tr>
                    <td>{{$vaccine->name}}</td>
                    <td>{{$vaccine->brand}}</td>
                    <td>{{$vaccine->quantity}}</td>   
                    <td>{{ $vaccine->created_at }}</td>
                    <td>{{ $vaccine->update_at }}</td>   
                    <td>
                        <a href="{{ route('vaccines.edit', $vaccine->id) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $vaccines->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection