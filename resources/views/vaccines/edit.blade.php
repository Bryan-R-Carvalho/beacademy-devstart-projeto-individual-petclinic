@extends("template.layout")
@section('title', 'Alterar vacina')
@section('body')
<div class="container w-50">
    <h1>Cadastrar vacina</h1>
    <form action="{{route('vaccines.update', $vaccine->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$vaccine->name}}" disabled>
        </div>
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" name="email" id="brand" class="form-control" value="{{$vaccine->brand}}" disabled>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{$vaccine->quantity}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection