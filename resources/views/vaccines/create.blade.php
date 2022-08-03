@extends("template.layout")
@section('title', 'Cadastrar vacina')
@section('body')
<div class="container w-50">
    <h1>Cadastrar vacina</h1>
    <form action="{{route('vaccines.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" name="brand" id="brand" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection